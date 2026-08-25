from flask import Flask, jsonify, request
import json
import os

app = Flask(__name__)

# Load processed data
DATA_FILE = 'api/processed_data.json'
with open(DATA_FILE, 'r') as f:
    data = json.load(f)

@app.route('/api/zonificacion-por-distrito', methods=['GET'])
def get_zonificacion_por_distrito():
    distrito = request.args.get('nombre')
    
    if not distrito:
        return jsonify({"error": "Debe proporcionar el parámetro 'nombre'"}), 400
    
    distrito = distrito.lower()
    
    # Filter data (exclude desconocido records)
    filtered_data = [item for item in data if item['distrito'] == distrito and item['distrito'] != 'desconocido']

    return jsonify(filtered_data)

if __name__ == '__main__':
    app.run(debug=True, port=5000)
