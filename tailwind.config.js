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
                anton: ['Anton'],
                poppin: ['Poppins'],
            },
            backgroundColor: {
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0d5385',
                'gold' :  '#eddea4',
            },
            color: {
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0D5384 ',
                'gold' :  '#eddea4',
            },
            borderColor:{
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0D5384 ',
                'gold' :  '#eddea4',
            },
            textColor:{
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0D5384 ',
                'gold' :  '#eddea4',
            }
        },
    },

    plugins: [forms],
};
