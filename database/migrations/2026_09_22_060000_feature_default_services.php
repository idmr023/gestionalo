<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $featured = [
            [
                'title' => 'Saneamiento Legal y Licencias de Funcionamiento',
                'featured_order' => 1,
            ],
            [
                'title' => 'Habilitación, Implementación y Mantenimiento Comercial',
                'featured_order' => 2,
            ],
            [
                'title' => 'Ingeniería de Seguridad & Control ITSE',
                'featured_order' => 3,
            ],
        ];

        foreach ($featured as $service) {
            Service::where('title', $service['title'])->each(function (Service $model) use ($service) {
                $model->is_featured = true;
                $model->featured_order = $service['featured_order'];
                $model->save();
            });
        }
    }

    public function down(): void
    {
        Service::where('is_featured', true)
            ->whereIn('title', [
                'Saneamiento Legal y Licencias de Funcionamiento',
                'Habilitación, Implementación y Mantenimiento Comercial',
                'Ingeniería de Seguridad & Control ITSE',
            ])
            ->each(function (Service $service) {
                $service->is_featured = false;
                $service->featured_order = 0;
                $service->save();
            });
    }
};