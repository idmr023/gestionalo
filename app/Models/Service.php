<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'is_featured',
        'featured_order',
        'cta_text',
        'cta_url',
        'related_post_url',
        'related_project_url',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'featured_order' => 'integer',
        ];
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeFeaturedOrdered($query)
    {
        return $query->where('is_featured', true)->orderBy('featured_order')->orderBy('sort_order');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'related_service_id');
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
