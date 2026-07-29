# Gestionalo — Codebase Guide for AI Agents

## Project Overview

Laravel 11 + Livewire 3 CMS for a legal architecture & safety inspection company. Public landing page + admin panel.

Uses **Eloquent ORM** (Active Record pattern) — no raw SQL. Migrations define schema, models provide query/relationship interfaces.

## Key Conventions

### Naming
- Blade files: `kebab-case.blade.php`
- Livewire components: `PascalCase` (e.g., `PostForm`, `ServiceList`)
- Routes: `snake_case` names (e.g., `admin.posts.index`)
- Models: `PascalCase` singular (e.g., `Project`, `Service`, `Post`)
- Migrations: `YYYY_MM_DD_HHMMSS_description.php`

### Eloquent ORM Conventions
- **Relationships**: define both sides (e.g., `User::appointments()` HasMany + `Appointment::user()` BelongsTo)
- **Casts**: use native casts (`array`, `encrypted`, `boolean`) over accessors when possible
- **Encrypted columns**: `email` and `phone` on `Contact` use `encrypted` cast — **never** assert raw DB values in tests; read via model attributes instead
- **SoftDeletes**: used on Service, Project, Post
- **Auditable**: custom trait on Service, Project, Post — writes to `model_audits`
- **`model_audits`**: WORM-protected (no UPDATE/DELETE allowed), RANGE-partitioned by `created_at`
- **Queries**: prefer eager loading (`with()`), avoid N+1; use local scopes for reusable constraints

### Visual Design System

| Token | Value | Usage |
|-------|-------|-------|
| `primary` | `#0F172A` | Body text, headings, structure |
| `primary/50` | `rgba(15,23,42,0.5)` | Secondary text, muted |
| `accent` | `#EA580C` | Buttons, CTAs, hover states, 3D elements |
| `accent-hover` | `#C2410C` | Button hover |
| `surface` | `#FAFAFA` | Section backgrounds |
| `footer-bg` | `#0F172A` | Footer background |

### Typography
- Headings: `font-display` → Space Grotesk
- Body: `font-sans` → Inter
- Uppercase labels: `text-xs tracking-[0.3em] uppercase`
- Numbers: `font-display font-bold text-accent/10` or `text-[rgba(234,88,12,0.06)]`

### CSS Classes to Use
- **No rounded corners** — use flat borders
- **No shadows** — use `border border-[rgba(15,23,42,0.06)]` instead
- **Section spacing**: `py-32` (desktop)
- **Container**: `max-w-6xl mx-auto px-6 md:px-8 lg:px-12`
- **Dividers**: `w-12 h-px bg-accent/60` (horizontal line)
- **Grid lines**: `bg-[rgba(15,23,42,0.06)]` as grid with `gap-px`

### Admin Panel
- All admin routes prefixed with `admin.` in `routes/admin.php`
- Protected by `auth` + `IsAdmin` middleware
- Menu items defined in `config/admin-menu.php`
- Badge counts are computed at runtime in the config file — **do not** eager-load DB queries in config

### Security & Authorization
- **Policies**: one per model (`ServicePolicy`, `ProjectPolicy`, `PostPolicy`, `ContactPolicy`) — all admin-only CRUD
- **Policies registered** via `AuthServiceProvider` (manual `Gate::define` or auto-discovery)
- **Encryption at rest**: `email` and `phone` use Laravel's `encrypted` cast on Contact model
- **Rate Limiters**: registered in `AppServiceProvider` — `login` (5/min per email), `register` (2/min per IP), `contact` (3/min per IP)
- **WORM**: `model_audits` table has PL/pgSQL trigger preventing UPDATE/DELETE (PostgreSQL only)

### Components

| Component | Path | Props |
|-----------|------|-------|
| `<x-front.hero />` | `components/front/hero.blade.php` | `config` |
| `<x-front.cuanto />` | `components/front/cuanto.blade.php` | `config` |
| `<x-front.header />` | `components/front/header.blade.php` | none |
| `<x-front.footer />` | `components/front/footer.blade.php` | `config` |
| `<x-front.services />` | `components/front/services.blade.php` | `services` (Eloquent collection) |
| `<x-front.projects />` | `components/front/projects.blade.php` | `clients` (array or Eloquent collection) |
| `<x-front.cta />` | `components/front/cta.blade.php` | `config` |
| `<x-front.column-3d />` | `components/front/column-3d.blade.php` | `position` (left/right/center), `size` (sm/md/lg) |

### 3D Elements
- **Cubes** (hero corners): `.cube-corner` with orange wireframe (`rgba(234,88,12,0.15)`)
- **Hollow columns** (section dividers): `.scene-3d` + `.column-3d` with `transform-style: preserve-3d`
  - Hover speeds up rotation (25s → 5s)
  - Hidden on mobile (<768px)

### Key Routes

| Route | Name | Auth |
|-------|------|------|
| `/` | `home` | No |
| `/servicios` | `services.index` | No |
| `/proyectos` | `projects.index` | No |
| `/proyectos/{project:slug}` | `project.show` | No |
| `/blog` | `blog.index` | No |
| `/blog/{post:slug}` | `blog.show` | No |
| `/blog/categoria/{category:slug}` | `blog.category` | No |
| `/contacto` | `contact` | No (rate-limited 3/min per IP) |
| `/terminos` | `terms` | No |
| `/privacidad` | `privacy` | No |
| `/buscar` | `search` | No |
| `/login` | `login` | No (rate-limited 5/min per email) |
| `/mi-cuenta` | `client.dashboard` | Yes |
| `/admin/*` | `admin.*` | Yes + IsAdmin |

### Services

| Service | Path | Purpose |
|---------|------|---------|
| `CircuitBreaker` | `app/Services/CircuitBreaker.php` | Cache-based circuit breaker (closed → open → half-open). Methods: `isOpen()`, `call()`, `recordFailure()`, `recordSuccess()` |
| `CalendlyService` | `app/Services/CalendlyService.php` | Example service wrapping Calendly with CircuitBreaker |

### Database Infrastructure

| Feature | Where | Details |
|---------|-------|---------|
| **Read/write splitting** | `config/database.php` | `read`/`write` arrays in pgsql config; `sticky: true` |
| **Encrypted columns** | `app/Models/Contact.php` | `email` (varchar 500), `phone` (varchar 500) — both `encrypted` cast |
| **WORM trigger** | Migration `120000_add_worm_trigger` | PL/pgSQL function, conditional on PostgreSQL |
| **Partitioning** | Migration `120001_partition_model_audits` | RANGE by `created_at`, conditional on PostgreSQL |
| **Custom connector** | `app/Database/NeonPostgresConnector.php` | NeonDB-specific PDO connector |

### Testing

```bash
php vendor/bin/phpunit           # Run all tests
composer test                    # Same alias
```

- **Database**: SQLite in-memory (`RefreshDatabase` trait)
- **Structure**: `tests/Feature/` — `AuthTest` (7), `FrontPageTest` (9), `AdminTest` (8), plus `AppointmentTest` (2), `SearchTest` (1) = **27 tests, 56 assertions**
- **Factories**: `UserFactory`, `ServiceFactory`, `ProjectFactory`, `PostFactory`
- **Encrypted columns**: use model accessors in assertions, not `assertDatabaseHas` on encrypted fields

### Quality Tooling

```bash
composer analyse      # PHPStan static analysis (level 1)
composer format       # Laravel Pint (auto-fix PSR-12)
composer format:test  # Pint dry-run (CI)
composer test         # PHPUnit
```

### CI/CD (GitHub Actions)
- **File**: `.github/workflows/ci.yml` — runs on push/PR to main
- Jobs: PHP setup, PostgreSQL service, Composer, Pint, PHPStan, PHPUnit, Node build
- Database service uses PostgreSQL (not SQLite) in CI

### Common Tasks

**Add a new section to landing page:**
1. Create component in `resources/views/components/front/`
2. Add it to `resources/views/pages/index.blade.php`
3. Add data to `config/site.php` if needed
4. Add route in `routes/web.php` if it's a separate page

**Add a new admin section:**
1. Create Policy in `app/Policies/` (if authorization needed)
2. Register Policy in `app/Providers/AuthServiceProvider.php`
3. Create Livewire component in `app/Livewire/Admin/`
4. Create view in `resources/views/livewire/admin/`
5. Register route in `routes/admin.php`
6. Add entry to `config/admin-menu.php`

**Add a new model:**
1. Create migration with `php artisan make:migration`
2. Create model with `php artisan make:model`
3. Add `use Auditable` trait if audit tracking is needed
4. Create Policy if admin authorization is needed
5. Add `Route::resource` or explicit routes in `routes/admin.php`
6. Add menu entry in `config/admin-menu.php`
7. Create Livewire components for admin CRUD

**Build assets:**
```bash
npm run build    # production
npm run dev      # dev with hot-reload
```

### Documentation
Project docs are in `docs/`:
- `docs/01-architecture.md` — Architecture overview (ISO/IEC 25010 mapping)
- `docs/CHANGELOG.md` — Per-sprint changelog (Phase 1 → Phase 4+)
- `docs/02-implementation-plan.md` — 14-week roadmap (5 phases, Sprint 1-7)

### Implementation Plan (14-week roadmap)
See `docs/02-implementation-plan.md` for the full phased plan (5 phases, Sprint 1-7).

### Admin Panel Sections

| Section | Route | Livewire Component | Policy |
|---------|-------|--------------------|--------|
| Dashboard | `admin.dashboard` | Blade view only | — |
| Servicios | `admin.services.*` | `Admin\Services\ServiceList`, `ServiceForm` | `ServicePolicy` |
| Proyectos | `admin.projects.*` | `Admin\Projects\ProjectList`, `ProjectForm` | `ProjectPolicy` |
| Blog Artículos | `admin.posts.*` | `Admin\Blog\PostList`, `PostForm` | `PostPolicy` |
| Blog Categorías | `admin.blog.categories.*` | `Admin\Blog\CategoryList`, `CategoryForm` | — |
| Citas | `admin.appointments` | `Admin\AppointmentList` | `AppointmentPolicy` |
| Contactos | `admin.contacts` | `Admin\ContactList` | `ContactPolicy` |
| Usuarios | `admin.users` | `Admin\UserList` | `UserPolicy` |
| Papelera | `admin.recycle-bin` | `Admin\Recycle\RecycleBin` | — |
| Historial | `admin.history` | `Admin\ChangeHistory` | — |
