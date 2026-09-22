<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $fixes = [
            [
                'old_title' => 'ESTRUCTURAS Y LOGÍSTICA X',
                'title' => 'ESTRUCTURAS Y LOGÍSTICA',
                'subtitle' => 'Infraestructura y Almacenamiento',
                'logo_path' => 'assets/images/client-logistas.png',
            ],
            [
                'old_title' => 'PROYECTO VISTA INDUSTRIAL',
                'title' => 'PROYECTO VISTA INDUSTRIAL',
                'logo_path' => 'assets/images/logo.png',
            ],
            [
                'old_title' => 'CENTRO COMERCIAL Y CORPORATIVO Y',
                'title' => 'CENTRO COMERCIAL Y CORPORATIVO',
                'logo_path' => 'assets/images/logo.png',
            ],
            [
                'old_title' => 'COMPLEJO MULTIFUNCIONAL U',
                'title' => 'COMPLEJO MULTIFUNCIONAL',
                'logo_path' => 'assets/images/logo.png',
            ],
        ];

        foreach ($fixes as $fix) {
            Project::where('title', $fix['old_title'])->each(function (Project $project) use ($fix) {
                $project->title = $fix['title'];
                $project->logo_path = $fix['logo_path'];

                if (array_key_exists('subtitle', $fix)) {
                    $project->subtitle = $fix['subtitle'];
                }

                $project->save();
            });
        }
    }

    public function down(): void
    {
        //
    }
};
