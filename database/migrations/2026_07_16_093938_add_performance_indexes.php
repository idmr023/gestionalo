<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->index('is_active');
            $table->index('sort_order');
            $table->index(['is_active', 'sort_order']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->index('is_active');
            $table->index('sort_order');
            $table->index(['is_active', 'sort_order']);
            $table->index('is_featured');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->index('is_published');
            $table->index('published_at');
            $table->index(['is_published', 'published_at'], 'idx_posts_published_status');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
            $table->dropIndex(['sort_order']);
            $table->dropIndex(['is_active', 'sort_order']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
            $table->dropIndex(['sort_order']);
            $table->dropIndex(['is_active', 'sort_order']);
            $table->dropIndex(['is_featured']);
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex(['is_published']);
            $table->dropIndex(['published_at']);
            $table->dropIndex('idx_posts_published_status');
        });
    }
};
