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
                playfair: ['Playfair Display'],
                baby: ['Oooh Baby'],
                rozha: ['Rozha One'],
            },
            backgroundColor: {
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0d5385',
                'greywhite': '#edede9',
                'gold' :  '#eddea4',
            },
            color: {
                'dirtywhite': '#fffcf2', 
                'darkblue': '#0d5385',
                'greywhite': '#edede9',
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
            },
            boxShadow:{
                inner: 'inset 0 5px 7px 0 rgba(0, 0, 0, 0.06)',
            },
            backgroundImage: {
                'registerbg': "url('/public/images/registerbg.jpg')",
              },
            screens: {
                'pn': '430px',
            },
              
        },
    },

    plugins: [forms],
};
