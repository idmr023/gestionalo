# Changelog

## Phase 4+ — Management & UX (Sprint 5.5) — 2026-07-16

### [4.6] Admin Appointments list
- **Policy**: `app/Policies/AppointmentPolicy.php` — `viewAny`, `confirm` (admin-only).
- **Livewire**: `app/Livewire/Admin/AppointmentList.php` — shows ALL appointments with user, title, date, status. Actions: confirm, cancel. Filters by status, search by client name. Dispatches `notify` toast events.
- **View**: `resources/views/livewire/admin/appointment-list.blade.php` — table with status badges, confirm/cancel buttons, `wire:confirm` dialogs, empty state.
- **Route**: `GET /admin/appointments` → `admin.appointments`.
- **Menu**: "Citas" entry in sidebar.

### [4.7] Admin Contacts list
- **Livewire**: `app/Livewire/Admin/ContactList.php` — shows all contact form submissions with name, contact info, message preview, date. Actions: mark as read/unread.
- **View**: `resources/views/livewire/admin/contact-list.blade.php` — table with read/unread badges, hover highlight for unread.
- **Route**: `GET /admin/contacts` → `admin.contacts`.
- **Menu**: "Contactos" entry in sidebar.

### [4.8] Admin Users list
- **Policy**: `app/Policies/UserPolicy.php` — `viewAny` (admin-only).
- **Livewire**: `app/Livewire/Admin/UserList.php` — shows all registered users with name, email, role, registration date. Searchable.
- **View**: `resources/views/livewire/admin/user-list.blade.php` — table with admin/client badges.
- **Route**: `GET /admin/users` → `admin.users`.
- **Menu**: "Usuarios" entry in sidebar.

### [4.9] Services page (standalone)
- **Route**: `GET /servicios` → `services.index` in `routes/web.php`.
- **File**: `app/Http/Controllers/FrontController.php` — added `services()` method.
- **View**: `resources/views/pages/servicios.blade.php` — full standalone page with all services, CTA to contact.
- **Landing**: `resources/views/components/front/services.blade.php` — now shows preview (first 3 services) + "Ver todos nuestros servicios" button linking to `/servicios`. "Saber más" → "Más información" → links to `/servicios`.
- **Nav**: Smart navigation — clicking "Servicios" scrolls to `#servicios` on landing page, navigates to `/servicios` from other pages.

### [4.10] Header cleanup
- Removed "Admin" link from public header (only accessible via Mi cuenta panel).
- Removed "Asesorías" placeholder link (pointed to nonexistent `#asesorias`).

### [4.11] Dashboard widgets
- **File**: `resources/views/admin/dashboard.blade.php` — added 4th stat card (Contactos with unread count), recent contacts widget, upcoming appointments widget.

### [4.12] UX improvements
- Loading indicator (`wire:loading.delay.longer`) in appointment list.
- `wire:confirm` dialogs on confirm/cancel actions.
- Empty states ("No hay citas", "No hay contactos", "No hay usuarios").
- `dispatch('notify', ...)` toast events in Livewire components.

### [4.13] Tests
- Added 4 tests to `AdminTest`: appointments list, contacts list, users list, admin header no admin link.
- **Result**: 31 tests, 64 assertions.

## Phase 4 — Security + Performance (Sprint 5) — 2026-07-16

### [4.1] Authorization (Laravel Policies)
- **Policies**: `app/Policies/ServicePolicy.php`, `ProjectPolicy.php`, `PostPolicy.php`, `ContactPolicy.php` — viewAny/view/create/update/delete methods for admin-only access.
- **File**: `app/Providers/AuthServiceProvider.php` — registers all 4 policies.
- **Change**: Registered `AuthServiceProvider` in `bootstrap/app.php`.

### [4.2] Encryption at rest
- **Model**: `app/Models/Contact.php` — added `encrypted` cast on `email` and `phone`.
- **Migration**: `database/migrations/2026_07_16_130000_widen_encrypted_columns.php` — widened `contacts.email` to `varchar(500)`, `contacts.phone` to `varchar(500)` to accommodate ciphertext length.
- **Test**: `tests/Feature/FrontPageTest.php` — updated assertion to check decrypted model attributes instead of raw DB values.

### [4.3] WORM audit trigger
- **Migration**: `database/migrations/2026_07_16_120000_add_worm_trigger_to_model_audits.php` — PL/pgSQL trigger function `prevent_model_audits_update()` that raises exception on UPDATE/DELETE of `model_audits`. Conditional on PostgreSQL via `DB::connection()` check.

### [4.4] Read/write splitting
- **Config**: `config/database.php` — added `read` and `write` connection arrays for PostgreSQL with sticky mode (`sticky: true`). Uses existing NeonDB credentials as write host; localhost as read host (placeholder for future read replica).

### [4.5] Partitioning
- **Migration**: `database/migrations/2026_07_16_120001_partition_model_audits.php` — recreates `model_audits` as a RANGE-partitioned table by `created_at`. Conditional on PostgreSQL via `DB::connection()` check.

## Phase 3 — Architecture + Quality (Sprint 3-4) — 2026-07-16

### [3.1] Real client dashboard — Appointments
- **Migration**: `database/migrations/2026_07_16_110000_create_appointments_table.php` — table `appointments` (user_id, title, description, scheduled_at, status).
- **File**: `app/Models/Appointment.php` — new model with `user()` BelongsTo relation.
- **File**: `app/Models/User.php` — added `appointments()` HasMany relation.
- **Livewire**: `app/Livewire/Client/AppointmentList.php` — create, cancel, list appointments with Livewire pagination.
- **View**: `resources/views/livewire/client/appointment-list.blade.php` — form + list with status badges.
- **File**: `resources/views/pages/mi-cuenta.blade.php` — replaced placeholder "No tienes citas" with `@livewire('client.appointment-list')`.

### [3.2] Global frontend search
- **Livewire**: `app/Livewire/GlobalSearch.php` — searches Posts (title, excerpt), Projects (title, subtitle, description), Services (title, description). Minimum 2 chars. Returns up to 10 results grouped by type.
- **View**: `resources/views/livewire/global-search.blade.php` — dropdown results with type badges, search icon input.
- **View**: `resources/views/pages/buscar.blade.php` — dedicated search page layout.
- **Route**: `GET /buscar` named `search`.
- **File**: `resources/views/components/front/header.blade.php` — added search icon link in desktop nav.

### [3.3] Circuit Breaker + Retry
- **File**: `app/Services/CircuitBreaker.php` — generic circuit breaker using Laravel cache. States: closed → open (after N failures) → half-open (after timeout). Methods: `isOpen()`, `isHalfOpen()`, `call()`, `recordFailure()`, `recordSuccess()`.
- **File**: `app/Services/CalendlyService.php` — example service wrapping Calendly API with CircuitBreaker. Configurable via `config/services.php`.

### [3.4] CI/CD (GitHub Actions)
- **File**: `.github/workflows/ci.yml` — pipeline with jobs:
  - PHP setup (8.2 + pgsql extensions)
  - PostgreSQL service container
  - Composer install
  - Pint (code style)
  - PHPStan (static analysis)
  - PHPUnit (tests with PostgreSQL)
  - Node setup + npm ci + npm build

### [3.5] Rate Limiter
- **File**: `app/Providers/AppServiceProvider.php` — registered rate limiters: `login` (5/min per email), `register` (2/min per IP), `contact` (3/min per IP).
- **Routes**: Added `throttle:login` to `POST /login`, `throttle:register` to `POST /register`, `throttle:contact` to `POST /contacto`.
- **Tests**: Added `AppointmentTest` (2 tests), `SearchTest` (1 test). Total: 27 tests, 54 assertions.

## Phase 2 — Features + Testing (Sprint 2) — 2026-07-16

### [2.1] Contact page + form
- **Migration**: `database/migrations/2026_07_16_100000_create_contacts_table.php` — table `contacts` (name, email, phone, message, is_read).
- **File**: `app/Models/Contact.php` — new model.
- **File**: `app/Http/Controllers/FrontController.php` — added `contact()` and `sendContact()` methods with validation.
- **File**: `resources/views/pages/contacto.blade.php` — full-page contact form + contact info sidebar.
- **File**: `resources/views/components/front/header.blade.php` — added "Contacto" nav link (desktop + mobile).
- **Change**: Form submits to `POST /contacto`, creates `Contact` record, redirects with flash message.

### [2.2] Terms & Privacy pages
- **File**: `resources/views/pages/terminos.blade.php` — static T&C page.
- **File**: `resources/views/pages/privacidad.blade.php` — static privacy policy page.
- **File**: `resources/views/components/front/footer.blade.php` — added "Términos" and "Privacidad" links in footer.
- **File**: `app/Http/Controllers/FrontController.php` — added `terms()` and `privacy()` methods.

### [2.3] Categories for Posts
- **Migration**: `database/migrations/2026_07_16_100001_create_categories_tables.php` — tables `categories` and `category_post` (pivot).
- **File**: `app/Models/Category.php` — new model with `posts()` BelongsToMany relation, auto-slug.
- **File**: `app/Models/Post.php` — added `categories()` BelongsToMany relation.
- **Livewire**: `app/Livewire/Admin/Blog/CategoryList.php` — admin list with search, sort, delete.
- **Livewire**: `app/Livewire/Admin/Blog/CategoryForm.php` — admin create/edit form.
- **Views**: `resources/views/livewire/admin/blog/category-list.blade.php`, `category-form.blade.php`.
- **Routes**: `/admin/blog/categories`, `/admin/blog/categories/create`, `/admin/blog/categories/{category}/edit`.
- **Menu**: `config/admin-menu.php` — Blog now has children: Artículos, Categorías.
- **PostForm**: added category multi-checkbox selector with `sync()`.
- **Blog view**: added category filter pills on `/blog`, category labels on posts, route `/blog/categoria/{category:slug}`.
- **Admin layout**: updated to support nested menu items (`children` key).

### [2.4] Test suite
- **File**: `tests/TestCase.php` — created base TestCase class.
- **File**: `tests/Feature/AuthTest.php` — 7 tests (login page, register page, register, login, admin redirect, wrong credentials, logout).
- **File**: `tests/Feature/FrontPageTest.php` — 9 tests (home, projects, blog, published posts, unpublished posts, contact page, contact form, terms, privacy).
- **File**: `tests/Feature/AdminTest.php` — 8 tests (unauth access, non-admin forbidden, dashboard, services list, projects list, posts list, categories list, client dashboard).
- **Factories**: `UserFactory`, `ServiceFactory`, `ProjectFactory`, `PostFactory`.
- **Result**: 24 tests, 48 assertions, all passing.

### Configuration
- **phpunit.xml**: Uses SQLite in-memory for testing.

## Phase 1 — Quick Wins (Sprint 1) — 2026-07-16

### [1.1] PostSeeder
- **File**: `database/seeders/PostSeeder.php`
- **Change**: Created seeder with 6 blog posts about legal architecture, ITSE, and business safety.
- **File**: `database/seeders/DatabaseSeeder.php`
- **Change**: Registered `PostSeeder::class` in the call array.

### [1.2] Unify register.blade.php
- **File**: `resources/views/auth/register.blade.php`
- **Change**: Replaced Breeze default styles (rounded-2xl, shadows, slate colors) with the project's flat design system (primary/accent tokens, border-[rgba], flat inputs matching login.blade.php).

### [1.3] Projects from DB on landing
- **File**: `app/Http/Controllers/FrontController.php`
- **Change**: `index()` now fetches active projects (cached) and passes them to the view.
- **File**: `resources/views/pages/index.blade.php`
- **Change**: `<x-front.projects>` now receives DB projects instead of empty array.
- **File**: `resources/views/components/front/projects.blade.php`
- **Change**: Accepts Eloquent collection, maps to array format; falls back to hardcoded data if empty.
    - Added `use Illuminate\Support\Facades\Storage` import.
    - Added logic to detect `Storage::url()` paths vs static asset paths.

### [1.4] sitemap.xml + robots.txt
- **File**: `public/sitemap.xml`
- **Change**: Static sitemap with all public routes.
- **File**: `public/robots.txt`
- **Change**: Allows all crawlers, points to sitemap.

### [1.5] PHPStan + Larastan + Pint
- **File**: `composer.json`
- **Change**: Added `phpstan/phpstan`, `larastan/larastan`, `laravel/pint` dev dependencies.
- **File**: `phpstan.neon`
- **Change**: Created config at level 1.
- **Scripts**: Added `composer analyse` (PHPStan), `composer format` (Pint), `composer format:test` (Pint dry-run).
- **Fix**: Added return type `: BelongsTo` to `ModelAudit::user()` relation to resolve PHPStan error.
- **Result**: `composer analyse` passes with 0 errors. Pint formatted 38 files across the codebase.
