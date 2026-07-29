<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use Auditable, HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon_svg',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Service $service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });

        static::updating(function (Service $service) {
            if ($service->isDirty('title') && ! $service->isDirty('slug')) {
                $service->slug = Str::slug($service->title);
            }
        });

        static::saved(function () {
            cache()->forget('home.services');
            cache()->forget('services.all');
        });

        static::deleted(function () {
            cache()->forget('home.services');
            cache()->forget('services.all');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
