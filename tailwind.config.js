const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/tw-elements/dist/js/**/*.js"    
    ],
    plugins: [require("tw-elements/dist/plugin")],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'Poppins' : ['Poppins', 'sans-serif'],
                'PTserif' : ['PT Serif', 'serif'],
            'Jost' : ['Jost', 'sans-serif']
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
