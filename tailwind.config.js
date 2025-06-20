import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                background: 'var(--background)',
                dark: 'var(--dark)',
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                highlight: 'var(--highlight)',
            },
        },
    },

    plugins: [forms],
};
