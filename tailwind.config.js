import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
                animation: {
                    'fade-in-down': 'fade-in-down 0.8s ease-out',
                    'fade-in-up': 'fade-in-up 0.8s ease-out',
                    'zoom-in': 'zoom-in 0.8s ease-out',
                    'slide-in-bottom': 'slide-in-bottom 0.8s ease-out',
                },
                keyframes: {
                    'fade-in-down': {
                        '0%': { opacity: '0', transform: 'translateY(-20px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                    'fade-in-up': {
                        '0%': { opacity: '0', transform: 'translateY(20px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                    'zoom-in': {
                        '0%': { opacity: '0', transform: 'scale(0.9)' },
                        '100%': { opacity: '1', transform: 'scale(1)' },
                    },
                    'slide-in-bottom': {
                        '0%': { opacity: '0', transform: 'translateY(30px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                },
                
            colors: {
                burgundy: '#800020',
                maroon: '#4B1E24',
                peach: '#F4E1D2',
                taupe: '#B89C88',
                beige: '#E5D3C5',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
