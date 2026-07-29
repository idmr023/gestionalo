<x-layouts.app title="Política de Privacidad">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div class="max-w-3xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Legal</span>
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">Política de Privacidad</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <div class="prose prose-sm max-w-none text-primary/70">
                <h2 class="text-xl font-display font-bold text-primary">1. Datos que Recopilamos</h2>
                <p>Recopilamos información que nos proporcionas directamente: nombre, correo electrónico, número de teléfono y mensajes a través de nuestro formulario de contacto. También recopilamos datos de navegación mediante cookies analíticas.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">2. Uso de la Información</h2>
                <p>Utilizamos tus datos para responder consultas, procesar solicitudes de servicios, mejorar nuestro sitio web y cumplir con obligaciones legales. No compartimos tu información personal con terceros sin tu consentimiento explícito.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">3. Protección de Datos</h2>
                <p>Implementamos medidas técnicas y organizativas para proteger tu información contra accesos no autorizados, pérdida o alteración. Sin embargo, ningún sistema es completamente seguro.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">4. Tus Derechos</h2>
                <p>Tienes derecho a acceder, rectificar, cancelar y oponerte al procesamiento de tus datos personales. Para ejercer estos derechos, contáctanos a {{ config('site.contact.email') }}.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">5. Cookies</h2>
                <p>Este sitio utiliza cookies esenciales para su funcionamiento. No utilizamos cookies de rastreo de terceros sin tu consentimiento.</p>

                <p class="mt-12 text-sm text-primary/40">Última actualización: Julio 2026</p>
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
