<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => '¿Qué es la Licencia de Funcionamiento y por qué tu negocio la necesita?',
                'excerpt' => 'Conoce los tipos de licencia, requisitos municipales y cómo obtenerla sin contratiempos para operar legalmente.',
                'body' => '<p>Toda actividad comercial en Perú requiere una licencia de funcionamiento otorgada por la municipalidad distrital. Este documento acredita que tu local cumple con las condiciones de seguridad, salubridad y zonificación.</p><h2>Tipos de licencia</h2><p>Existen dos categorías principales: licencia temporal (para actividades eventuales) y licencia definitiva (para operaciones permanentes). Además, desde 2019, la Licencia de Funcionamiento Integrada incluye la evaluación de ITSE.</p><h2>Requisitos clave</h2><ul><li>Vigencia de poder del representante legal</li><li>Declaración jurada de observancia de condiciones de seguridad</li><li>Pago de derechos municipales</li><li>Inspección técnica de seguridad (ITSE) para actividades de alto riesgo</li></ul><p>En Gestionalo gestionamos todo el proceso por ti, desde la preparación del expediente hasta la obtención de la licencia.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'ITSE: Todo sobre la Inspección Técnica de Seguridad en Edificaciones',
                'excerpt' => 'La ITSE es obligatoria para obtener tu licencia. Te explicamos en qué consiste, sus modalidades y cómo prepararte.',
                'body' => '<p>La Inspección Técnica de Seguridad en Edificaciones (ITSE) es el procedimiento mediante el cual la municipalidad verifica que tu local cumple con las condiciones mínimas de seguridad para operar.</p><h2>Modalidades de ITSE</h2><p>Existen tres modalidades: ITSE Ex Ante (antes del funcionamiento), ITSE Ex Post (para locales ya operativos) e ITSE Complementaria (cuando hay ampliaciones o modificaciones).</p><h2>¿Qué evalúa?</h2><ul><li>Sistemas de señalización y rutas de evacuación</li><li>Extintores y sistemas contra incendios</li><li>Condiciones estructurales</li><li>Aforo máximo permitido</li><li>Instalaciones eléctricas</li></ul><p>Nuestro equipo prepara tu expediente técnico completo para que pases la inspección sin observaciones.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Saneamiento Inmobiliario: Cómo regularizar tu propiedad ante SUNARP',
                'excerpt' => 'Guía práctica para independizar, declarar fábrica y sanear títulos de propiedad ante SUNARP y municipalidades.',
                'body' => '<p>El saneamiento inmobiliario es el conjunto de procesos técnico-legales destinados a regularizar la situación jurídica de un inmueble. Sin un título saneado, no puedes vender, hipotecar ni realizar modificaciones importantes.</p><h2>Procesos principales</h2><ul><li><strong>Declaratoria de Fábrica:</strong> Regulariza las construcciones existentes ante la municipalidad</li><li><strong>Independización:</strong> Separa legalmente un área de un inmueble matriz</li><li><strong>Prescripción Adquisitiva:</strong> Regulariza la propiedad cuando no hay título original</li></ul><p>En Gestionalo realizamos todo el proceso técnico-legal, incluyendo planos, memorias descriptivas y seguimiento ante SUNARP.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Adecuación de Locales Comerciales: Diseño y Construcción',
                'excerpt' => 'Transformamos tu espacio comercial con diseño funcional, mobiliario especializado y sistemas de infraestructura centralizada.',
                'body' => '<p>La adecuación de un local comercial va mucho más allá de la decoración. Implica un diseño funcional que optimice el flujo de clientes, la operatividad del personal y el cumplimiento normativo.</p><h2>Nuestro proceso</h2><ol><li><strong>Diagnóstico:</strong> Evaluamos el estado actual y las necesidades operativas</li><li><strong>Diseño:</strong> Proponemos distribución de espacios, mobiliario y acabados</li><li><strong>Construcción:</strong> Ejecutamos la remodelación con estándares de calidad</li><li><strong>Equipamiento:</strong> Instalamos mobiliario especializado y sistemas centralizados</li></ol><p>Trabajamos con oficinas corporativas, locales retail, almacenes y consultorios.</p>',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Seguridad en Locales Comerciales: Checklist de Preparación',
                'excerpt' => 'Lista de verificación esencial para que tu local cumpla con todas las normas de seguridad antes de una fiscalización.',
                'body' => '<p>Las municipalidades realizan fiscalizaciones periódicas para verificar que los locales cumplen con las condiciones de seguridad. Una mala calificación puede significar multas o incluso la clausura temporal.</p><h2>Checklist básico</h2><ul><li>Extintores vigentes y señalizados</li><li>Luces de emergencia operativas</li><li>Señalización de rutas de evacuación visible</li><li>Plan de contingencia actualizado</li><li>Registro de mantenimiento de equipos</li><li>Aforo visible y respetado</li><li>Puertas de emergencia sin obstrucciones</li></ul><p>Ofrecemos auditorías técnicas preventivas para identificar y corregir observaciones antes de la fiscalización.</p>',
                'is_published' => true,
                'published_at' => now()->addDay(),
            ],
            [
                'title' => 'Mantenimiento Comercial: Protege tu Inversión a Largo Plazo',
                'excerpt' => 'El mantenimiento programado reduce costos operativos y previene sanciones. Conoce los planes que ofrecemos.',
                'body' => '<p>Un plan de mantenimiento comercial no solo preserva la imagen de tu negocio, sino que asegura la continuidad operativa y el cumplimiento normativo constante.</p><h2>Beneficios</h2><ul><li>Reducción de costos de reparación mayores</li><li>Prevención de sanciones municipales</li><li>Mayor vida útil de instalaciones y equipos</li><li>Ambiente seguro para clientes y colaboradores</li></ul><h2>Planes disponibles</h2><p>Ofrecemos mantenimiento preventivo mensual, trimestral y semestral, adaptado al tipo y tamaño de tu local comercial.</p>',
                'is_published' => true,
                'published_at' => now()->addDays(3),
            ],
        ];

        foreach ($posts as $p) {
            Post::firstOrCreate(['title' => $p['title']], $p);
        }
    }
}
