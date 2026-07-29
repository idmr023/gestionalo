# Implementation Plan (14-Week Roadmap)

## Overview
5 phases, 7 sprints combining pending features with ISO/IEC 25010-driven architectural improvements.

## Phase 1: Quick Wins (Sprint 1 — Week 1-2)

| # | Task | Type | Status |
|---|------|------|--------|
| 1.1 | **PostSeeder** — 6 blog posts so the blog doesn't start empty | Feature | ✅ Done |
| 1.2 | **Unify register.blade.php** — Replace Breeze styles with flat design system | Design | ✅ Done |
| 1.3 | **Projects from DB on landing** — Remove hardcoded fallback, pass DB projects | Bugfix | ✅ Done |
| 1.4 | **sitemap.xml + robots.txt** — Basic SEO | SEO | ✅ Done |
| 1.5 | **PHPStan + Larastan + Pint** — Static analysis + code style | Calidad | ✅ Done |

## Phase 2: Features + Testing (Sprint 2 — Week 3-4)

| # | Task | Type | Details |
|---|------|------|---------|
| 2.1 | **Contact page + form** | Feature | Route `/contacto`, Blade view, form validation, store in DB or email notification |
| 2.2 | **Terms & privacy pages** | Feature | Static pages at `/terminos`, `/privacidad` |
| 2.3 | **Categories for Posts** | Feature | Model `Category`, migration, `belongsToMany` relation, CRUD in admin, filter in blog |
| 2.4 | **Initial test suite** | QA | Integration tests for auth, CRUDs, landing page, blog |
| 2.5 | **Laravel Pint (PSR-12)** | Calidad | Already installed — enforce in CI |

## Phase 3: Architecture + Quality (Sprint 3-4 — Week 5-8)

| # | Task | Type | Details |
|---|------|------|---------|
| 3.1 | **Real client dashboard** | Feature | Model `Appointment`, migration, relation with `User`, basic CRUD from client panel |
| 3.2 | **Global frontend search** | Feature | Livewire search component, route `/buscar`, search Posts/Projects/Services |
| 3.3 | **Circuit Breaker + Retry** | Resiliencia | Implement for external API calls (Calendly). Use Laravel cache as breaker backend |
| 3.4 | **CI/CD (GitHub Actions)** | DevOps | Pipeline: `composer install` → `pint --test` → `phpstan analyse` → `phpunit` → `npm run build` |
| 3.5 | **Rate Limiter** | Resiliencia | Configure Laravel's built-in `RateLimiter` for login, register, contact form |

## Phase 4: Security + Performance (Sprint 5-6 — Week 9-12)

| # | Task | Type | Details |
|---|------|------|---------|
| 4.1 | **Laravel Policies + Middleware** | Security | `ServicePolicy`, `ProjectPolicy`, `PostPolicy` — granular admin authorization |
| 4.2 | **Encryption at rest (AES-256)** | Security | Encrypt sensitive columns (email, phone) via Laravel cast encryption or `laravel-encrypted-attributes` |
| 4.3 | **Immutable Audit (WORM)** | Security | PL/pgSQL trigger to revoke UPDATE/DELETE on `model_audits`, add `SECURITY BARRIER` constraint |
| 4.4 | **Write-Splitting + Connection Pooling** | Performance | Configure `config/database.php` with separate `read`/`write` connections. Document PgBouncer/Supavisor config |
| 4.5 | **Declarative Partitioning** | Performance | Range-partition `model_audits` by month with local indexes |

## Phase 5: Polish + Documentation (Sprint 7 — Week 13-14)

| # | Task | Type | Details |
|---|------|------|---------|
| 5.1 | **Advanced caching** | Performance | Audit N+1 queries, add eager loading where missing, refine cache TTLs |
| 5.2 | **Fix Trix editor** | Bugfix | Replace JS workaround with native Livewire 3 integration or migrate to alternative editor |
| 5.3 | **Technical documentation** | Docs | Update README, architecture docs, DB diagram, deploy guide |
| 5.4 | **E2E tests (Dusk/Cypress)** | QA | Critical flow: register → login → create post → view blog → admin edit → recycle bin |

## Dependency Graph

```
Phase 1 (Quick Wins)
    │
    ▼
Phase 2 (Features + Tests) ──► Phase 3 (Architecture + CI/CD)
                                      │
                                      ▼
                              Phase 4 (Security + Performance)
                                      │
                                      ▼
                              Phase 5 (Polish + Docs)
```

## ISO/IEC 25010 Mapping

| Quality Attribute | Phase | Implementation |
|-------------------|-------|----------------|
| **Maintainability** | 1, 3, 5 | PHPStan, Pint, CI/CD, decoupled services |
| **Performance** | 4 | Write-splitting, pooling, partitioning, caching |
| **Reliability** | 3 | Circuit breaker, retry, rate limiter |
| **Security** | 4 | Policies, encryption, WORM, TLS |
| **Testability** | 2, 3, 5 | PHPUnit, Dusk, CI pipeline |

## Effort Estimate
- **Total**: ~14 weeks (3.5 months)
- **Phase 1**: Complete ✅
- **Phase 2**: ~2 weeks
- **Phase 3**: ~4 weeks
- **Phase 4**: ~4 weeks
- **Phase 5**: ~2 weeks
