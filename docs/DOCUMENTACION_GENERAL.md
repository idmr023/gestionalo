# Documentación General del Proyecto — Gestionalo

> **Resumen Ejecutivo:** CMS corporativo y de inspección de seguridad desarrollado en Laravel 11 y Livewire 3. Diseñado bajo estándares ISO/IEC 25010, incluye panel de administración seguro, autenticación robusta, auditoría inmutable (WORM) y pasarela de contenidos multimedia.

---

## Índice de Contenidos
1. [Introducción y Propósito](#1-introducción-y-propósito)
2. [Arquitectura y Tecnologías](#2-arquitectura-y-tecnologías)
3. [Módulos Principales del Sistema](#3-módulos-principales-del-sistema)
4. [Seguridad y Buenas Prácticas](#4-seguridad-y-buenas-prácticas)
5. [Guía de Despliegue en Producción](#5-guía-de-despliegue-en-producción)
6. [Mantenimiento, Pruebas y Calidad](#6-mantenimiento-pruebas-y-calidad)

---

## 1. Introducción y Propósito
**Gestionalo** es una plataforma web integral orientada a una empresa de arquitectura legal e inspección de seguridad. Su propósito es ofrecer:
- **Página pública institucional:** Presentación de servicios, proyectos destacados, blog técnico, métodos de contacto y agendamiento de citas.
- **Panel de administración privado (`/admin`):** Control total y seguro sobre catálogos de servicios, proyectos, artículos, usuarios, contactos y registros de auditoría.
- **Panel de cliente (`/mi-cuenta`):** Espacio personalizado para usuarios registrados donde pueden gestionar sus citas y perfil.

---

## 2. Arquitectura y Tecnologías
El sistema está construido con un stack moderno y mantenible:
- **Backend:** PHP 8.2+ con **Laravel 11** (Patrón MVC y Active Record mediante Eloquent ORM).
- **Frontend Dinámico:** **Livewire 3** para componentes reactivos en tiempo real sin complejidad de frameworks SPA separados.
- **Estilos Visuales:** Tailwind CSS con un sistema de diseño estricto (diseño plano, sin bordes redondeados excesivos, líneas divisorias precisas, paleta de colores corporativa).
- **Base de Datos:** PostgreSQL (con soporte para triggers WORM, particionamiento y read/write splitting).

---

## 3. Módulos Principales del Sistema

### 3.1. Sitio Público (Landing Page)
- **Hero & Secciones:** Presentación visual con elementos interactivos y componentes 3D decorativos.
- **Servicios y Proyectos:** Listados dinámicos extraídos directamente de la base de datos.
- **Blog Corporativo:** Artículos organizados por categorías con soporte de visualización y filtrado.
- **Contacto:** Formulario con validación estricta y protección contra abusos mediante Rate Limiters.

### 3.2. Panel de Administración (`/admin`)
Protegido estrictamente por autenticación y el middleware de roles (`IsAdmin`):
- **Gestión de Servicios y Proyectos:** CRUD completo con soporte de borrado lógico (*SoftDeletes*).
- **Blog y Categorías:** Administración de contenidos editoriales.
- **Citas y Contactos:** Visualización de solicitudes enviadas por los usuarios.
- **Gestión de Usuarios y Papelera:** Administración de cuentas y recuperación de elementos eliminados.
- **Historial de Cambios:** Registro de modificaciones del sistema.

### 3.3. Panel de Cliente (`/mi-cuenta`)
- Acceso para usuarios autenticados estándar.
- Creación y seguimiento de citas de inspección o consultoría.

---

## 4. Seguridad y Buenas Prácticas
El proyecto implementa estrictos estándares de seguridad a nivel de software y bases de datos:
- **Políticas de Autorización (Policies):** Control granular por modelo (`ServicePolicy`, `ProjectPolicy`, `PostPolicy`, etc.) que asegura que solo los administradores realicen acciones sensibles.
- **Cifrado en Reposo:** Los campos sensibles como `email` y `phone` en la tabla de contactos utilizan el cast nativo de encriptación (`encrypted`).
- **Auditoría Inmutable (WORM):** La tabla `model_audits` cuenta con un mecanismo de protección a nivel de base de datos (trigger PL/pgSQL) que bloquea operaciones de actualización o borrado.
- **Rate Limiters:** Limitación de peticiones por IP/email para prevenir ataques de fuerza bruta en el login (5/min), registro (2/min) y formulario de contacto (3/min).
- **Resiliencia (Circuit Breaker):** Sistema de protección ante fallos externos en servicios de terceros (ej. integración con Calendly).

---

## 5. Guía de Despliegue en Producción

### Requisitos del Servidor
- Servidor web (Nginx o Apache).
- PHP >= 8.2 con extensiones requeridas por Laravel.
- Gestor de dependencias **Composer** y **Node.js / NPM**.
- Base de datos **PostgreSQL**.

### Pasos Generales
1. **Clonar y configurar entorno:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
2. **Instalar dependencias y compilar activos:**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install && npm run build
   ```
3. **Ejecutar migraciones y poblar datos base:**
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```
4. **Optimizar la aplicación:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
5. **Configuración del Servidor Web:** Apuntar la ruta pública del dominio directamente hacia la carpeta `public/` del proyecto y asegurar permisos de escritura en `storage/` y `bootstrap/cache/`.

---

## 6. Mantenimiento, Pruebas y Calidad
Para garantizar la estabilidad a largo plazo, el proyecto incluye herramientas de calidad integradas:
- **Pruebas Automatizadas (PHPUnit):** Suite completa de pruebas de características y componentes.
  ```bash
  php artisan test
  ```
- **Análisis Estático (PHPStan):** Detección de errores y malas prácticas de código.
  ```bash
  composer analyse
  ```
- **Estándares de Código (Laravel Pint):** Formateo automático de código siguiendo PSR-12.
  ```bash
  composer format
  ```
- **Pruebas End-to-End (E2E):** Preparado para pruebas de flujos de usuario mediante Laravel Dusk o herramientas equivalentes.
