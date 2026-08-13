# Certificado Laboral — Listado de Trabajos Realizados

**Proyecto:** Gestionalo — CMS corporativo para empresa de arquitectura legal, regularización de licencias e inspecciones técnicas de seguridad (ITSE).

**Desarrollador:** Ivan Manrique
**Rol:** Desarrollo Full-Stack (Backend PHP/Laravel + Frontend)
**Período:** 2026

---

## 1. Desarrollo del sitio (fases previas)

- Maquetación de diseños Figma hacia CMS auto-gestionable; creación de un tema de WordPress a medida desde cero en entorno local (XAMPP/Apache/MySQL), modularizado en `header.php`, `footer.php`, `index.php` y `functions.php` para evitar código duplicado.
- Optimización de la carga de recursos mediante el uso correcto de `wp_enqueue_scripts` y depuración de dependencias con funciones avanzadas (`wp_dequeue_style`, `wp_deregister_style`) para eliminar estilos inyectados por defecto y mejorar la velocidad.
- Estructuración CSS profesional aplicando la metodología BEM (Block, Element, Modifier) para un código escalable y mantenible.
- Diseño e implementación de una arquitectura desacoplada (Headless) con Contentful + Astro, garantizando contenido agnóstico de la capa de presentación.
- Modelado de datos estructurados en Contentful: creación de Content Types (`Menu`, `HeroSection`, `ServiciosSection`, `Configuración Global`) y contenido modular con reordenamiento de secciones por drag-and-drop.

## 2. Desarrollo full-stack Laravel 11 + Livewire 3

- Desarrollo de un CMS corporativo a medida bajo arquitectura monolítica moderna: Laravel 11 como backend, Livewire 3 + Blade como capa interactiva, Alpine.js y Tailwind CSS en el frontend.
- Diseño y ejecución de migraciones de base de datos con Eloquent ORM/PostgreSQL para las entidades dinámicas: Servicios, Proyectos, Blog, Categorías, Contactos, Citas y auditoría (8 modelos, 17 migraciones).
- Seguridad y control de accesos: autenticación robusta y middlewares personalizados para proteger las rutas del panel de administración.
- Desarrollo de un sistema de citas propio: agendamiento de visitas técnicas (bloques 09:00–16:00), validación y unicidad de DNI, estados de cita y confirmación.
- Panel de cliente (Mi Cuenta): gestión de perfil, citas y paginación.
- Búsqueda global en el frontend (posts, proyectos, servicios) con componente Livewire y parámetro de URL.
- Página de servicios independiente con navegación inteligente.
- Implementación de un lector de artículos inteligente (Text-to-Speech) con Web Speech API, reproductor flotante en Alpine.js (play/pause/retroceso/avance/velocidad), algoritmo de segmentación de DOM y ecualizador/waveform visual en tiempo real.
- Diseño visual avanzado: sistema de diseño institucional plano, proporción áurea del color (70% blanco / 25% azul profundo / 5% naranja óxido), columnas huecas 3D con `transform-style: preserve-3d` e interactividad guiada por mouse con interpolación matemática en tiempo real.

## 3. Panel de administración (10 secciones)

- Dashboard con widgets: tarjetas estadísticas, contactos recientes y citas próximas.
- CRUD completo de Servicios, Proyectos (con galería de imágenes), Blog y Categorías — con borrado lógico (SoftDeletes).
- Gestión de Citas: listado general, búsqueda por cliente, filtros por estado, confirmar/cancelar.
- Bandeja de Contactos: listado con marcado de leído/no leído.
- Gestión de Usuarios: listado, búsqueda y roles (admin/cliente).
- Papelera: recuperación de elementos eliminados.
- Historial de cambios: registro de modificaciones con capacidad de reversión.

## 4. Seguridad

- Políticas de autorización Laravel para 6 modelos (Service, Project, Post, Contact, Appointment, User), registro centralizado en `AuthServiceProvider`.
- Cifrado en reposo AES-256-CBC mediante cast `encrypted` en campos sensibles (email y teléfono).
- Auditoría inmutable (WORM) con trigger PL/pgSQL que bloquea operaciones UPDATE/DELETE sobre la tabla `model_audits`.
- 3 rate limiters: login (5/min por email), registro (2/min por IP) y contacto (3/min por IP).
- Protección CSRF, regeneración de sesión y control de acceso por roles (`IsAdmin`).

## 5. Arquitectura de datos y resiliencia

- Read/write splitting con modo sticky y conector personalizado para PostgreSQL (NeonPostgresConnector).
- Particionamiento RANGE de la tabla `model_audits` por `created_at`.
- Circuit Breaker basado en caché (estados closed → open → half-open) con wrapper para APIs externas (Calendly, Gemini).
- Índices de rendimiento, SoftDeletes y trait de auditoría automática (`Auditable`).
- Comandos Artisan: limpieza de auditorías, purga de papelera y reporte del sistema.

## 6. Calidad, testing y DevOps

- Suite de pruebas automatizadas PHPUnit: 31 tests / 64 aserciones (auth, frontend, admin, citas, búsqueda) con factories Eloquent.
- Análisis estático con PHPStan/Larastan (0 errores) y estándares de código con Laravel Pint (PSR-12).
- CI/CD con GitHub Actions: PHP 8.2, PostgreSQL, Pint, PHPStan, PHPUnit y build Node/Vite en cada push/PR a main.
- Despliegue en la nube (Render) con Dockerfile, administración de DNS en Hostinger (registros A/CNAME) y certificados SSL/HTTPS con Let's Encrypt.
- SEO: `sitemap.xml` y `robots.txt`; endpoint de salud `/health` y API de resúmenes generados con IA (Gemini).

## 7. Documentación

- Documentación de arquitectura alineada a ISO/IEC 25010, plan de implementación a 14 semanas (5 fases / 7 sprints).
- Documentación técnica y general, guía de pruebas E2E (Laravel Dusk), changelog por sprint, manual del propietario y README.
