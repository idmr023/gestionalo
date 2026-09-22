<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    use Auditable, HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'client',
        'location',
        'service_type',
        'subtitle',
        'slug',
        'description',
        'summary',
        'services_performed',
        'result',
        'logo_path',
        'gallery',
        'related_service_id',
        'related_post_url',
        'related_project_url',
        'whatsapp_message',
        'sort_order',
        'is_featured',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'gallery' => 'array',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'related_service_id' => 'integer',
        ];
    }

    public function relatedService()
    {
        return $this->belongsTo(Service::class, 'related_service_id');
    }

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::updating(function (Project $project) {
            if ($project->isDirty('title') && ! $project->isDirty('slug')) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::saved(function () {
            cache()->forget('home.projects');
            cache()->forget('projects.all');
        });

        static::deleted(function () {
            cache()->forget('home.projects');
            cache()->forget('projects.all');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
