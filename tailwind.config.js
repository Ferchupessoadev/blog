import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                tektur: ['Tektur', ...defaultTheme.fontFamily.sans],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#003566',
                    dark: '#FFC300',
                },
                secondary: {
                    light: '#FFD60A',
                    dark: '#001D3D',
                },
                background: {
                    light: '#F1F5F9',
                    dark: '#000814',
                },
                text: {
                    light: '#001814',
                    dark: '#F1F5F9',
                },
                accent: {
                    light: '#FFC300',
                    dark: '#1e72cc',
                },
            }
        },
    },
    plugins: [
        require('preline/plugin'),
    ],
    darkMode: "class",
};
