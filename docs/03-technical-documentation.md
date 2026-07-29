# Documentación Técnica Final — Gestionalo

Este documento recopila la arquitectura, despliegue, mantenimiento y especificaciones técnicas del CMS **Gestionalo** (Laravel 11 + Livewire 3).

## 1. Arquitectura del Sistema
El proyecto sigue el patrón MVC con Livewire para componentes reactivos en tiempo real sin necesidad de un frontend SPA separado.

- **Backend:** Laravel 11, PHP 8.2+, Eloquent ORM.
- **Frontend:** Blade, Tailwind CSS, Vite, Livewire 3.
- **Base de Datos:** PostgreSQL (con soporte para triggers WORM, particionamiento y read/write splitting).

## 2. Seguridad y Resiliencia
- **Políticas de Autorización:** `ServicePolicy`, `ProjectPolicy`, `PostPolicy`, etc.
- **Cifrado en Reposo:** Las columnas `email` y `phone` de la tabla `contacts` usan el cast `encrypted`.
- **Auditoría WORM:** Tabla `model_audits` protegida mediante funciones PL/pgSQL para prevenir actualizaciones y borrados.
- **Rate Limiters:** Protecciones activas para login (5/min), registro (2/min) y formulario de contacto (3/min).
- **Circuit Breaker:** Implementado en `App\Services\CircuitBreaker` para llamadas externas (ej. Calendly).

## 3. Guía de Despliegue en Producción

### Requisitos del Servidor
- PHP >= 8.2 con extensiones: `Ctype`, `DOM`, `Fileinfo`, `Filter`, `Hash`, `Mbstring`, `OpenSSL`, `PCRE`, `PDO`, `Session`, `Tokenizer`, `XML`.
- Composer y Node.js / NPM.
- Base de datos PostgreSQL.

### Pasos de Despliegue
1. Clonar el repositorio en el servidor.
2. Copiar y configurar el archivo `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Instalar dependencias de producción:
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install
   npm run build
   ```
4. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```
5. Optimizar Laravel para producción:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
6. Configurar el servidor web (Nginx/Apache) para que apunte a la carpeta `public/` del proyecto y asegurar permisos correctos en `storage/` y `bootstrap/cache/`.

## 4. Comandos de Calidad y Testing
```bash
php artisan test         # Ejecutar pruebas unitarias y de integración
composer analyse         # Análisis estático con PHPStan
composer format          # formateo con Laravel Pint
```
