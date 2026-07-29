<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Saneamiento Legal y Licencias de Funcionamiento',
                'description' => 'Trámite y obtención de licencias comerciales multisede, declaratorias de fábrica, independizaciones y saneamiento inmobiliario técnico-legal ante SUNARP y municipalidades para aperturas comerciales sin retrasos.',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m9 15 2 2 4-4"/></svg>',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Habilitación, Implementación y Mantenimiento Comercial',
                'description' => 'Remodelación y adecuación de espacios comerciales de alta gama (oficinas, retail y almacenes), fabricación de mobiliario especializado e instalación de sistemas centralizados de infraestructura comercial.',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Ingeniería de Seguridad & Control ITSE',
                'description' => 'Elaboración integral de expedientes técnicos para Defensa Civil (ITSE), planos de arquitectura, señalización, rutas de evacuación, planes de contingencia y auditoría técnica preventiva in situ antes de fiscalizaciones municipales.',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"/><path d="M14 6a6 6 0 0 1 6 6v3"/><path d="M4 15v-3a6 6 0 0 1 6-6"/><rect x="2" y="15" width="20" height="4" rx="1"/></svg>',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($services as $s) {
            Service::firstOrCreate(['title' => $s['title']], $s);
        }
    }
}
