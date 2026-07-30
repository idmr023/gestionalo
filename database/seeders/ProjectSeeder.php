<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'RESITER',
                'subtitle' => 'Planta Industrial - Inspección y Licenciamiento',
                'description' => 'Proyecto integral de arquitectura legal, cumplimiento normativo e inspección técnica de seguridad para instalaciones de la planta industrial RESITER. Incluye validación de estructuras, normativas contra incendios y optimización de espacios operativos.',
                'logo_path' => 'assets/images/client-resiter.png',
                'gallery' => [
                    'assets/images/portafolio/proy1.jpeg',
                    'assets/images/portafolio/proy1 (2).jpeg',
                    'assets/images/portafolio/proy1 (3).jpeg',
                    'assets/images/portafolio/proy1 (4).jpeg',
                    'assets/images/portafolio/proy1 (5).jpeg',
                    'assets/images/portafolio/proy1 (6).jpeg',
                    'assets/images/portafolio/proy1 (7).jpeg',
                    'assets/images/portafolio/proy1 (8).jpeg',
                    'assets/images/portafolio/proy1 (9).jpeg',
                    'assets/images/portafolio/proy1 (10).jpeg',
                    'assets/images/portafolio/proy1 (11).jpeg',
                    'assets/images/portafolio/proy1 (12).jpeg',
                ],
                'sort_order' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'MULTIDENT',
                'subtitle' => 'Consultorio Dental - Licenciamiento Sanitario',
                'description' => 'Diseño arquitectónico especializado, flujos de esterilización y obtención de permisos sectoriales y municipales para la red de consultorios dentales MULTIDENT.',
                'logo_path' => 'assets/images/client-multident.png',
                'gallery' => [
                    'assets/images/portafolio/mutident.png',
                    'assets/images/portafolio/mutident.png.jpeg',
                    'assets/images/portafolio/mutident.png.png',
                    'assets/images/portafolio/mutident.png (2).jpeg',
                    'assets/images/portafolio/mutident.png (3).jpeg',
                    'assets/images/portafolio/mutident.png (4).jpeg',
                    'assets/images/portafolio/mutident.png (5).jpeg',
                    'assets/images/portafolio/mutident.png (6).jpeg',
                    'assets/images/portafolio/mutident.png (7).jpeg',
                    'assets/images/portafolio/mutident.png (8).jpeg',
                    'assets/images/portafolio/mutident.png (9).jpeg',
                    'assets/images/portafolio/mutident.png (10).jpeg',
                ],
                'sort_order' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'PROYECTO VISTA INDUSTRIAL',
                'subtitle' => 'Diseño y Renderizado 3D de Complejo',
                'description' => 'Desarrollo de vistas 3D avanzadas, volumetría y fachadas para complejos industriales de gran envergadura. Optimización de accesos vehiculares y seguridad perimetral.',
                'logo_path' => 'assets/images/client-castello.png',
                'gallery' => [
                    'assets/images/portafolio/proyvista.jpg',
                    'assets/images/portafolio/proyvista.jpg.jpg',
                    'assets/images/portafolio/proyvista.jpg.png',
                    'assets/images/portafolio/proyvista.jpg (2).png',
                ],
                'sort_order' => 3,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'ESTRUCTURAS Y LOGÍSTICA X',
                'subtitle' => 'Infabetructura y Almacenamiento',
                'description' => 'Inspección técnica de seguridad en edificaciones (ITSE), cálculo de aforo y adecuación normativa para naves de almacenamiento y distribución.',
                'logo_path' => 'assets/images/client-logistas.png',
                'gallery' => [
                    'assets/images/portafolio/proyx.png',
                    'assets/images/portafolio/proyx.png.png',
                    'assets/images/portafolio/diseno-fachada-parque-industrial.jpg',
                    'assets/images/portafolio/diseno-3d-render-parque-industrial.jpg',
                ],
                'sort_order' => 4,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'CENTRO COMERCIAL Y CORPORATIVO Y',
                'subtitle' => 'Arquitectura Comercial y Oficinas',
                'description' => 'Habilitación de espacios corporativos y comerciales con enfoque en seguridad contra incendios, evacuación y confort lumínico.',
                'logo_path' => 'assets/images/client-castello.png',
                'gallery' => [
                    'assets/images/portafolio/proyy.jpg',
                    'assets/images/portafolio/proyy.jpg.jpg',
                    'assets/images/portafolio/01-Vista-01-PS.jpg',
                    'assets/images/portafolio/02-Vista-02-PS.jpg',
                ],
                'sort_order' => 5,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'COMPLEJO MULTIFUNCIONAL U',
                'subtitle' => 'Distribución y Espacios Urbanos',
                'description' => 'Proyecto de arquitectura y diseño urbano para optimización de flujos de tránsito peatonal y vehicular en zonas comerciales.',
                'logo_path' => 'assets/images/client-scala.png',
                'gallery' => [
                    'assets/images/portafolio/proyu.jpg',
                    'assets/images/portafolio/proyu.jpg.jpg',
                    'assets/images/portafolio/2.jpg',
                    'assets/images/portafolio/3.jpg',
                    'assets/images/portafolio/4.jpg',
                ],
                'sort_order' => 6,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'GALERÍA TÉCNICA E INSPECCIONES',
                'subtitle' => 'Portafolio General de Auditorías',
                'description' => 'Conjunto de inspecciones técnicas, levantamientos arquitectónicos y peritajes de seguridad en diversas edificaciones comerciales e industriales.',
                'logo_path' => 'assets/images/logo.png',
                'gallery' => [
                    'assets/images/portafolio/2.jpg',
                    'assets/images/portafolio/3.jpg',
                    'assets/images/portafolio/9.jpg',
                    'assets/images/portafolio/11.jpg',
                    'assets/images/portafolio/111.jpg',
                    'assets/images/portafolio/03.png',
                    'assets/images/portafolio/FFFF.jpg',
                    'assets/images/portafolio/ytr.jpg',
                    'assets/images/portafolio/AF1QipOBvI33gwD3s4ujzQlqyqO94S-5dWaynkEqKEJ8.jpg',
                    'assets/images/portafolio/WhatsApp Image 2026-02-05 at 3.37.32 PM.jpeg',
                    'assets/images/portafolio/ChatGPT Image 9 jul 2026, 19_31_06.png',
                    'assets/images/portafolio/ChatGPT Image 11 feb 2026, 22_00_26.png',
                ],
                'sort_order' => 7,
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($projects as $p) {
            Project::updateOrCreate(['title' => $p['title']], $p);
        }
    }
}
