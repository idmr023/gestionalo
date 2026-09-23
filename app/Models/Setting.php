<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
        'type',
    ];

    public const CACHE_KEY = 'site_settings_all';

    public static function allCached(): array
    {
        $cached = Cache::get(self::CACHE_KEY);

        if (is_array($cached) && $cached !== []) {
            return $cached;
        }

        // Never cache an empty/failed result, otherwise a single transient
        // DB error would poison the cache forever and every setting would
        // silently fall back to config('site.*').
        $fresh = self::query()->pluck('value', 'key')->toArray();

        if ($fresh !== []) {
            Cache::forever(self::CACHE_KEY, $fresh);
        }

        return $fresh;
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $all = self::allCached();

        if (array_key_exists($key, $all) && $all[$key] !== null && $all[$key] !== '') {
            return $all[$key];
        }

        // Check fallback config('site.' . $key) if dot notation
        $configFallback = config('site.'.$key);
        if ($configFallback !== null) {
            return $configFallback;
        }

        return $default;
    }

    public static function set(string $key, mixed $value, string $group = 'general', string $type = 'string'): self
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            [
                'value' => is_array($value) ? json_encode($value) : $value,
                'group' => $group,
                'type' => $type,
            ]
        );

        self::flushCache();

        return $setting;
    }

    public static function flushCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    protected static function booted(): void
    {
        static::saved(function () {
            self::flushCache();
        });

        static::deleted(function () {
            self::flushCache();
        });
    }
}
