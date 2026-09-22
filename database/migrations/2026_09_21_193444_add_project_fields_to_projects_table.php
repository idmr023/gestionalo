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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('client', 255)->nullable()->after('title');
            $table->string('location', 255)->nullable()->after('client');
            $table->string('service_type', 255)->nullable()->after('location');
            $table->text('summary')->nullable()->after('description');
            $table->longText('services_performed')->nullable()->after('summary');
            $table->longText('result')->nullable()->after('services_performed');
            $table->foreignId('related_service_id')->nullable()->constrained('services')->nullOnDelete()->after('result');
            $table->string('related_post_url', 500)->nullable()->after('related_service_id');
            $table->string('related_project_url', 500)->nullable()->after('related_post_url');
            $table->string('whatsapp_message', 1000)->nullable()->after('related_project_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropConstrainedForeignId('related_service_id');
            $table->dropColumn(['client', 'location', 'service_type', 'summary', 'services_performed', 'result', 'related_post_url', 'related_project_url', 'whatsapp_message']);
        });
    }
};
