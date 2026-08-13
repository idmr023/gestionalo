A continuación, se detalla la **evolución cronológica** del proyecto **"Gestionalo"** basada en las decisiones y desarrollos técnicos abordados a lo largo del tiempo. Esta estructura te servirá tanto para documentar tu repositorio de Git en detalle como para redactar un **certificado laboral de desarrollo de software** robusto y profesional.

---

### **Fase 1: Maquetación Inicial y Desarrollo del Tema WordPress (Local)**
* **Contexto técnico:** El proyecto inició con una arquitectura monolítica tradicional en un entorno local, traduciendo diseños de Figma a un CMS auto-gestionable.
* **Tecnologías utilizadas:** PHP, WordPress (Custom Themes), MySQL, HTML5, CSS3 (Metodología BEM), JavaScript (ES6), XAMPP.
* **Logros y tareas clave para tu certificado laboral:**
  * **Configuración del entorno local de desarrollo** utilizando servidores Apache y bases de datos relacionales en XAMPP.
  * **Creación de un Tema de WordPress a medida ("Gestionalo")** desde cero, modularizando la interfaz en archivos estructurados (`header.php`, `footer.php`, `index.php`, `functions.php`) para evitar código duplicado.
  * **Optimización en la carga de recursos** mediante el uso correcto de `wp_enqueue_scripts` en `functions.php` para encolar estilos y scripts sin generar conflictos.
  * **Higiene de código y depuración de dependencias**, creando funciones avanzadas (`wp_dequeue_style` y `wp_deregister_style`) para eliminar hojas de estilo CSS inyectadas por defecto por el core de WordPress y mejorar la velocidad de carga.
  * **Estructuración CSS profesional** aplicando la metodología BEM (Block, Element, Modifier) para asegurar un código escalable y fácil de mantener.

---

### **Fase 2: Arquitectura "Headless" y Modelado de Contenido (Contentful)**
* **Contexto técnico:** Ante las limitaciones y rigidez de WordPress, se exploró una arquitectura desacoplada (*Headless*) para separar por completo el diseño de la base de datos.
* **Tecnologías utilizadas:** Contentful (Headless CMS), Astro (Framework SSG), APIs REST, JSON.
* **Logros y tareas clave para tu certificado laboral:**
  * **Diseño e implementación de una Arquitectura Desacoplada (Headless)**, garantizando que el contenido sea agnóstico de la capa de presentación.
  * **Modelado de Datos Estructurados en Contentful**, creando "Content Types" específicos para la gestión dinámica del sitio web (tales como `Menu`, `HeroSection`, `ServiciosSection` y `Configuración Global`).
  * **Reducción de acoplamiento (*Decoupling*)**, estructurando la web de manera modular ("Modular Content") para permitir al cliente final reordenar secciones de la Landing Page mediante "drag-and-drop" sin alterar el código frontend.

---

### **Fase 3: Migración a Aplicación Monolítica Moderna (Laravel + Livewire)**
* **Contexto técnico:** Para eliminar la complejidad de APIs de terceros y mantener un control del 100% del backend y frontend en un solo repositorio, se migró a un backend robusto basado en PHP.
* **Tecnologías utilizadas:** Laravel, Livewire, Blade, Alpine.js, Tailwind CSS, PostgreSQL, Git/GitHub.
* **Logros y tareas clave para tu certificado laboral:**
  * **Desarrollo de un CMS a medida "mano a mano"** bajo una arquitectura monolítica moderna, utilizando Laravel como backend y Livewire/Blade para la capa interactiva.
  * **Diseño y ejecución de migraciones de base de datos** utilizando Eloquent ORM en PostgreSQL para las entidades dinámicas clave: `Servicios`, `Proyectos` y `Blog`.
  * **Seguridad y Control de Accesos**, integrando un sistema de autenticación robusto (Laravel Breeze o Fortify) y middlewares personalizados para proteger las rutas del panel de administración (Admin Role).
  * **Optimización de interactividad en el servidor** mediante Livewire, logrando una experiencia de usuario fluida (Single Page Application) sin la sobreingeniería ni los costos de mantenimiento de React o APIs REST externas.

---

### **Fase 4: Diseño Visual Avanzado y Micro-interacciones 3D**
* **Contexto técnico:** Se refinó el apartado visual para dotar a la web de una identidad arquitectónica, limpia y técnica.
* **Tecnologías utilizadas:** CSS3 3D Transforms, JavaScript de alto rendimiento (fórmulas de interpolación matemática), Tailwind CSS.
* **Logros y tareas clave para tu certificado laboral:**
  * **Implementación de un sistema de diseño institucional** aplicando la proporción áurea del color: 70% Blanco Nieve (espacio y legibilidad), 25% Azul Profundo (tipografía y límites de sección) y 5% Naranja Óxido (llamados a la acción).
  * **Desarrollo de animaciones complejas en 3D interactivo**, programando columnas huecas tridimensionales (*wireframe*) mediante la propiedad `transform-style: preserve-3d` de CSS.
  * **Programación de interactividad avanzada guiada por hardware**, implementando un script en JavaScript puro para rastrear las coordenadas del mouse (X, Y) y transformarlas mediante interpolación matemática lineal en grados de rotación tridimensional en tiempo real.

---

### **Fase 5: Implementación de Lector de Artículos Inteligente (TTS)**
* **Contexto técnico:** Desarrollo de una solución integrada de accesibilidad para la lectura de los artículos del blog directamente desde el navegador.
* **Tecnologías utilizadas:** Web Speech API, Alpine.js, HTML5 Semantic Elements.
* **Logros y tareas clave para tu certificado laboral:**
  * **Desarrollo de una solución nativa Text-to-Speech (TTS)** usando la Web Speech API del navegador, lo que eliminó costos de servidores externos y problemas de latencia de red.
  * **Programación reactiva de un reproductor flotante avanzado** en el frontend usando Alpine.js (`x-data`), que incluye opciones de reproducción, pausa, retroceso/adelanto rápido de secciones y control dinámico de velocidad (`utterance.rate`).
  * **Algoritmo de segmentación de DOM en tiempo real**, diseñado para extraer etiquetas semánticas (`<p>`, `<h2>`, `<h3>`) y fragmentar textos extensos para evitar saturaciones de memoria (*buffer overflow*) en el sintetizador de voz.
  * **Creación de un ecualizador/waveform visual dinámico** con CSS que actualiza su progreso en tiempo real de forma proporcional a las secciones leídas.

---

### **Fase 6: Despliegue, Infraestructura y DevOps**
* **Contexto técnico:** Puesta en producción y configuración de la infraestructura de red para el dominio oficial del proyecto.
* **Tecnologías utilizadas:** Render, Hostinger DNS Management, SSL (Let's Encrypt).
* **Logros y tareas clave para tu certificado laboral:**
  * **Despliegue continuo de la aplicación** en la plataforma en la nube Render.
  * **Administración y configuración de DNS**, gestionando zonas DNS en Hostinger para apuntar registros tipo **A** y **CNAME** hacia los servidores de Render de forma correcta.
  * **Implementación de seguridad SSL/HTTPS**, solucionando problemas de propagación de red y coordinando la emisión de certificados de seguridad automáticos con Let's Encrypt para proteger la privacidad del sitio.

---

🛠️ ¿Te gustaría que redacte formalmente el documento del **certificado laboral** utilizando esta información para que solo tengas que exportarlo o firmarlo?