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
            $table->boolean('is_featured')->default(false)->after('description');
            $table->unsignedSmallInteger('featured_order')->default(0)->after('is_featured');
            $table->string('cta_text', 255)->nullable()->after('sort_order');
            $table->string('cta_url', 500)->nullable()->after('cta_text');
            $table->string('related_post_url', 500)->nullable()->after('cta_url');
            $table->string('related_project_url', 500)->nullable()->after('related_post_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['is_featured', 'featured_order', 'cta_text', 'cta_url', 'related_post_url', 'related_project_url']);
        });
    }
};
