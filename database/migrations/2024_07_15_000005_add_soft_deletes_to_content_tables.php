<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('services', fn (Blueprint $t) => $t->dropSoftDeletes());
        Schema::table('projects', fn (Blueprint $t) => $t->dropSoftDeletes());
        Schema::table('posts', fn (Blueprint $t) => $t->dropSoftDeletes());
    }
};
