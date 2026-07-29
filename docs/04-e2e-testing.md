# Pruebas End-to-End (E2E) — Guía y Configuración

Para completar la Fase 5 del plan de implementación, se establece la estrategia de pruebas End-to-End (E2E). Debido a la naturaleza del stack (Laravel + Livewire), **Laravel Dusk** es la herramienta nativa recomendada para simular interacciones reales del navegador.

## 1. Instalación de Laravel Dusk (Opcional / Producción Local)
Para habilitar Dusk en el entorno de desarrollo:

```bash
composer require --dev laravel/dusk
php artisan dusk:install
```

## 2. Flujo Crítico Evaluado
Las pruebas E2E deben cubrir los siguientes escenarios principales del negocio:
1. **Registro e Inicio de Sesión:**
   - Navegar a `/register`, completar datos de usuario y registrarse exitosamente.
   - Cerrar sesión e iniciar sesión en `/login`.
2. **Navegación Pública y Blog:**
   - Cargar la página principal (`/`).
   - Navegar al listado de proyectos y blog (`/blog`).
   - Filtrar posts por categoría.
3. **Formulario de Contacto:**
   - Llenar y enviar el formulario de contacto en `/contacto` y verificar el mensaje de éxito.
4. **Panel de Administración (Admin CRUD):**
   - Iniciar sesión con cuenta de administrador (`is_admin = true`).
   - Acceder a `/admin`.
   - Crear, editar y listar un servicio o artículo de blog.
   - Enviar elemento a la papelera (`recycle-bin`).

## 3. Ejecución de Pruebas Dusk
Una vez configurado ChromeDriver y los tests en `tests/Browser/`:

```bash
php artisan dusk
```
