const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue"
    ],

    theme: {
        colors: {
            "white": "#fff",
            "black": "#000",
            "light-green": "#73D1B9",
            green: "#13535A",
            "accent-green": "#13545A",
            "dark-green": "#009eeb",
            pink: "#FFB7C1",
            yellow: "#F6EAD4",
            "dark-grey": "#0C2F33",
            "off-black": "#333333",
            "ultra-light-grey": "#F3F3F3",
            "off-white": "#F8F8F8",
            "off-black": "#333333",
        },
        extend: {
            fontFamily: {
                sans: ["Rubik", ...defaultTheme.fontFamily.sans],
                title: ["Futura", ...defaultTheme.fontFamily.sans]
            },
            width: {
                'screen-2xl' : '1440px'
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [require("@tailwindcss/ui")]
};
