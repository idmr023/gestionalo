# Architecture Overview

## Project
**Gestionalo CMS** — Laravel 11 + Livewire 3 + PostgreSQL CMS for a legal architecture & safety inspection company (Peru).

## Stack
| Layer | Technology |
|-------|-----------|
| Backend | PHP 8.2, Laravel 11 |
| ORM | Eloquent (Active Record) — no raw SQL |
| Frontend | Livewire 3, Alpine.js, Tailwind CSS |
| Database | PostgreSQL (NeonDB with custom connector) |
| Assets | Vite, Laravel Breeze (auth scaffolding) |
| CI/CD | GitHub Actions (PHPUnit, Pint, PHPStan, Node build) |

## Codebase Structure
```
app/
├── Console/Commands/        # Artisan commands (clean-audits, purge-trashed)
├── Database/
│   └── NeonPostgresConnector.php  # Custom NeonDB connector
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php     # Login, Register, Logout, Dashboard
│   │   └── FrontController.php    # Home, Projects, Blog, Contact, Terms, Privacy, Search
│   └── Middleware/
│       └── IsAdmin.php            # Admin guard middleware
├── Livewire/
│   ├── Admin/
│   │   ├── Blog/                  # PostForm, PostList, CategoryForm, CategoryList
│   │   ├── Projects/              # ProjectForm, ProjectList
│   │   ├── Services/              # ServiceForm, ServiceList
│   │   └── Recycle/               # RecycleBin
│   ├── Admin/ChangeHistory.php    # Audit log viewer + revert
│   ├── Client/AppointmentList.php # Client appointment dashboard
│   └── GlobalSearch.php           # Frontend search
├── Models/
│   ├── Appointment.php
│   ├── Category.php
│   ├── Contact.php                # encrypted casts on email, phone
│   ├── ModelAudit.php             # WORM-protected, partitioned
│   ├── Post.php
│   ├── Project.php
│   ├── Service.php
│   └── User.php
├── Policies/
│   ├── ContactPolicy.php
│   ├── PostPolicy.php
│   ├── ProjectPolicy.php
│   └── ServicePolicy.php
├── Providers/
│   ├── AppServiceProvider.php      # Rate limiters registration
│   ├── AuthServiceProvider.php     # Policy registration
│   └── DatabaseServiceProvider.php
├── Services/
│   ├── CalendlyService.php         # Calendly API wrapper with CircuitBreaker
│   └── CircuitBreaker.php          # Cache-based circuit breaker
└── Traits/
    └── Auditable.php               # Auto-audit trait for Eloquent models
```

## Routes
- **Public**: `/`, `/proyectos`, `/blog`, `/blog/categoria/{slug}`, `/contacto`, `/terminos`, `/privacidad`, `/buscar`, `/login`, `/register`
- **Client**: `/mi-cuenta`, `/mi-cuenta/citas` (protected by `auth`)
- **Admin**: `/admin/*` (protected by `auth` + `IsAdmin` middleware)
- All admin routes defined in `routes/admin.php`, registered in `RouteServiceProvider`.

## Models & DB
| Model | Table | SoftDeletes | Audit | Encrypted |
|-------|-------|-------------|-------|-----------|
| Service | services | Yes | Yes | — |
| Project | projects | Yes | Yes | — |
| Post | posts | Yes | Yes | — |
| User | users | No | No | — |
| Contact | contacts | No | No | email, phone |
| Appointment | appointments | No | No | — |
| Category | categories | No | No | — |
| ModelAudit | model_audits | No | N/A | — |

## Database Infrastructure
- **Read/write splitting**: configured in `config/database.php` (sticky: true)
- **Encryption at rest**: AES-256-CBC via `encrypted` cast on Contact (email, phone)
- **WORM**: PL/pgSQL trigger blocks UPDATE/DELETE on `model_audits`
- **Partitioning**: `model_audits` RANGE-partitioned by `created_at`
- **Custom connector**: `NeonPostgresConnector` for NeonDB

## Rate Limiters
| Limiter | Scope | Limit |
|---------|-------|-------|
| `login` | per email | 5/min |
| `register` | per IP | 2/min |
| `contact` | per IP | 3/min |

## Design System
| Token | Value |
|-------|-------|
| `primary` | `#0F172A` |
| `accent` | `#EA580C` |
| `accent-hover` | `#C2410C` |
| `surface` | `#FAFAFA` |
| `footer-bg` | `#0F172A` |
| Font display | Space Grotesk |
| Font sans | Inter |

No rounded corners, no shadows — flat borders with `border border-[rgba(15,23,42,0.06)]`.

## ISO/IEC 25010 Quality Plan
- **Maintainability**: PHPStan + Larastan (level 1), Pint (PSR-12), Eloquent ORM conventions
- **Performance**: Read/write splitting, query caching, eager loading, connection pooling
- **Reliability**: Circuit breaker for external APIs (Calendly), rate limiting (3 limiters)
- **Security**: Laravel Policies (4 models), AES-256 at rest (encrypted cast), WORM audit tables, auth + IsAdmin middleware

## Testing
- **27 tests, 56 assertions** — all passing
- SQLite in-memory with `RefreshDatabase` trait
- Factories: User, Service, Project, Post

## Current Status
**Phase 4 complete**. See `CHANGELOG.md` for per-sprint progress.

## References
- [AGENTS.md](../AGENTS.md) — AI agent conventions
- [ISO/IEC 25010](https://iso25000.com/index.php/en/iso-25000-standards/iso-25010)
