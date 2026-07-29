/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './app/Livewire/**/*.php',
        './app/Http/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0F172A',
                    light: '#1E293B',
                    dark: '#020617',
                },
                accent: {
                    DEFAULT: '#EA580C',
                    hover: '#C2410C',
                    light: '#FFF7ED',
                },
                surface: '#FAFAFA',
                'footer-bg': '#0F172A',
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
                display: ['"Space Grotesk"', 'Inter', 'system-ui', 'sans-serif'],
            },
            maxWidth: {
                '6xl': '72rem',
                '7xl': '80rem',
            },
            screens: {
                xs: '475px',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}