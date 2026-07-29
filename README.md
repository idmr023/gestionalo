# Gestionalo CMS

Sistema de gestión de contenido para **Gestionalo** — Arquitectura Legal, Regularización de Licencias e Inspecciones Técnicas de Seguridad (ITSE).

## Stack

- **Framework:** Laravel 11
- **Frontend:** Livewire 3 + Alpine.js + Tailwind CSS
- **Base de datos:** PostgreSQL (NeonDB)
- **Assets:** Vite
- **Calidad:** PHPStan (nivel 1), Laravel Pint (PSR-12), PHPUnit

## Features

- Landing page institucional con servicios, proyectos y blog
- Panel admin completo (10 secciones): Servicios, Proyectos, Blog (+ Categorías), Citas, Contactos, Usuarios, Papelera, Historial
- Dashboard de cliente con gestión de citas
- Búsqueda global (Posts, Proyectos, Servicios)
- Circuit Breaker + Rate Limiter para APIs externas
- Páginas: Home, Servicios, Proyectos, Blog (con categorías), Contacto, Términos, Privacidad, Búsqueda
- SEO: sitemap.xml + robots.txt

## Requisitos

- PHP 8.2+
- Node.js 20+
- Composer
- PostgreSQL 15+

## Instalación

```bash
# Clonar repositorio
git clone <repo-url>
cd gestionalo

# Dependencias PHP
composer install

# Dependencias JS
npm install

# Compilar assets
npm run build

# Copiar y configurar .env
cp .env.example .env
php artisan key:generate

# Migraciones
php artisan migrate

# Seeders (admin por defecto)
php artisan db:seed --class=AdminUserSeeder
```

## Variables de Entorno

| Variable | Descripción | Ejemplo |
|----------|-------------|---------|
| `DB_CONNECTION` | Driver de BD | `pgsql` |
| `DB_HOST` | Host primario (escritura) | `ep-example.us-east-2.aws.neon.tech` |
| `DB_READ_HOST` | Host de réplica (lectura, opcional) | `localhost` |
| `DB_DATABASE` | Nombre BD | `gestionalo` |
| `DB_USERNAME` | Usuario BD | `gestionalo_owner` |
| `DB_PASSWORD` | Password BD | `...` |
| `CALENDLY_TOKEN` | Token API Calendly | `...` |
| `CALENDLY_API_URL` | URL API Calendly | `https://api.calendly.com` |

## Desarrollo

```bash
# Terminal 1 — Servidor Laravel
php artisan serve

# Terminal 2 — Assets con hot-reload
npm run dev
```

## Testing y Calidad

```bash
# Ejecutar tests (31 tests, 64 assertions)
php artisan test

# Alternativa
composer test    # alias de php vendor/bin/phpunit

# Análisis estático (PHPStan nivel 1)
composer analyse

# Code style (Laravel Pint)
composer format       # aplica correcciones
composer format:test  # dry-run (CI)
```

## Admin por defecto

| Campo | Valor |
|-------|-------|
| Email | `admin@gestionalo.pe` |
| Password | `gestionalo2024` |

## Rutas principales

| Ruta | Nombre | Auth |
|------|--------|------|
| `/` | `home` | No |
| `/servicios` | `services.index` | No |
| `/proyectos` | `projects.index` | No |
| `/proyectos/{slug}` | `project.show` | No |
| `/blog` | `blog.index` | No |
| `/blog/{slug}` | `blog.show` | No |
| `/blog/categoria/{category:slug}` | `blog.category` | No |
| `/contacto` | `contact` | No |
| `/terminos` | `terms` | No |
| `/privacidad` | `privacy` | No |
| `/buscar` | `search` | No |
| `/login` | `login` | No |
| `/mi-cuenta` | `client.dashboard` | Sí |
| `/admin/*` | `admin.*` | Sí + admin |

## Estructura

```
app/
├── Http/Controllers/     # Controladores
├── Http/Middleware/       # IsAdmin middleware
├── Livewire/Admin/        # Componentes Livewire del panel
│   ├── Blog/              # Posts y Categorías
│   ├── Projects/          # CRUD proyectos
│   ├── Services/          # CRUD servicios
│   ├── Recycle/           # Papelera
│   ├── ChangeHistory.php  # Historial de cambios
│   ├── AppointmentList.php
│   ├── ContactList.php
│   └── UserList.php
├── Models/                # Eloquent models
├── Services/              # CircuitBreaker, CalendlyService
├── Traits/                # Auditable
└── Policies/              # ServicePolicy, ProjectPolicy, etc.

config/
├── admin-menu.php         # Menú dinámico del panel admin
├── site.php               # Configuración del sitio
└── database.php           # Read/write splitting

resources/
├── css/app.css            # Estilos globales + animaciones 3D
├── js/
│   ├── app.js             # Scripts frontend
│   └── admin.js           # Trix editor
└── views/
    ├── admin/             # Dashboard admin
    ├── auth/              # Login / registro
    ├── components/front/  # Componentes de la landpage
    ├── livewire/admin/    # Vistas de componentes Livewire
    └── pages/             # Páginas públicas

routes/
├── web.php                # Rutas públicas
├── admin.php              # Rutas del panel admin
└── console.php

docs/
├── 01-architecture.md     # Arquitectura (ISO/IEC 25010)
├── 02-implementation-plan.md  # Roadmap 14 semanas
└── CHANGELOG.md           # Historial por sprint
```

## Diseño

Paleta: Blanco + Azul Profundo (`#0F172A`) + Naranja Óxido (`#EA580C`).
Tipografía: Space Grotesk (títulos) + Inter (cuerpo).
Estilo: Editorial / Arquitectónico / Minimalista — sin bordes redondeados, sin sombras.

## CI/CD

GitHub Actions en `.github/workflows/ci.yml` — ejecuta Pint, PHPStan, PHPUnit y npm build en cada push/PR a main.

## Licencia

Uso interno — Gestionalo Inmobiliaria.
