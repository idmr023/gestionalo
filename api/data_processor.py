import requests
import geopandas as gpd
import pandas as pd
import json
from shapely.geometry import shape

def get_arcgis_data(base_url, total_count, page_size=2000):
    all_features = []
    for offset in range(0, total_count, page_size):
        params = {
            'f': 'geojson',
            'where': '1=1',
            'resultOffset': offset,
            'resultRecordCount': page_size
        }
        print(f"Fetching {offset} to {offset + page_size}...")
        response = requests.get(base_url, params=params)
        response.raise_for_status()
        data = response.json()
        all_features.extend(data['features'])
    return all_features

def process_data():
    # Load districts
    print("Loading district data...")
    districts = gpd.read_file('data/peru-geojson/lima_callao_distritos.geojson')

    # Filter only Lima Province districts (exclude Callao)
    lima_districts = districts[districts['provincia'] == 'LIMA'].copy()
    callao_districts = districts[districts['provincia'] == 'CALLAO'].copy()
    print(f"Lima Province districts: {len(lima_districts)}")

    # Normalize to lowercase
    lima_districts['distrito'] = lima_districts['distrito'].str.lower()

    # Fetch all zonification data
    arcgis_url = "https://services5.arcgis.com/bHvzrGGxW8wP6Utm/arcgis/rest/services/Zonficacion_Urbana_Vigente_LM_13022026_project/FeatureServer/0/query"
    total_count = 115703

    # Fetch all data
    all_features = get_arcgis_data(arcgis_url, total_count)

    print(f"Creating GeoDataFrame from {len(all_features)} features...")
    gdf_zones = gpd.GeoDataFrame.from_features(all_features, crs='EPSG:4326')

    # Spatial join - first pass with intersects
    print("Performing spatial join (first pass - intersects)...")
    joined = gpd.sjoin(gdf_zones, lima_districts, how='left', predicate='intersects')

    # Check for NaN records
    nan_mask = joined['distrito'].isna()
    nan_count = nan_mask.sum()
    print(f"Records without district after first pass: {nan_count}")

    # Second pass - find nearest district for NaN records
    if nan_count > 0:
        print(f"Finding nearest district for {nan_count} records...")

        # Get NaN records
        nan_records = joined[nan_mask].copy()

        # Convert to projected CRS for accurate distance calculation
        nan_records_proj = nan_records.to_crs('EPSG:32718')
        lima_proj = lima_districts.to_crs('EPSG:32718')
        callao_proj = callao_districts.to_crs('EPSG:32718')

        # Find nearest district for each NaN record
        nearest_districts = []
        for idx, row in nan_records_proj.iterrows():
            point = row.geometry.centroid

            lima_distances = lima_proj.geometry.distance(point)
            nearest_lima_dist = lima_distances.min()

            callao_distances = callao_proj.geometry.distance(point)
            nearest_callao_dist = callao_distances.min()

            # Only assign if closer to Lima than Callao
            if nearest_lima_dist <= nearest_callao_dist:
                nearest_lima_idx = lima_distances.idxmin()
                nearest_districts.append(lima_proj.loc[nearest_lima_idx, 'distrito'])
            else:
                nearest_districts.append(None)

        # Update the original joined dataframe
        joined.loc[nan_mask, 'distrito'] = nearest_districts

        # Verify NaN count
        final_nan_count = joined['distrito'].isna().sum()
        print(f"Records without district after second pass: {final_nan_count}")

    # Select relevant columns
    result = joined[['simb_zoni', 'distrito']].copy()

    # Normalize
    result['simb_zoni'] = result['simb_zoni'].fillna('').str.lower()
    result['distrito'] = result['distrito'].fillna('desconocido').str.lower()

    # Save to JSON
    print("Saving to JSON...")
    result.to_json('api/processed_data.json', orient='records')
    print("Done.")

    # Final statistics
    total = len(result)
    valid = len(result[result['distrito'] != 'desconocido'])
    print(f"\n=== FINAL STATISTICS ===")
    print(f"Total records: {total}")
    print(f"Lima records: {valid}")
    print(f"Excluded (Callao/unknown): {total - valid}")
    print(f"Lima coverage: {(valid / total * 100):.2f}%")

if __name__ == '__main__':
    process_data()
