import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            xs: "500px",
            sm: "600px",
            md: "988px",
            lg: "1078px",
            xl: "1265px",
            ...defaultTheme.screens,
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: {
                DEFAULT: "rgb(230 233 234)",
                border: "rgb(47, 51, 54)",
                pure: "#ffffff",
            },
            black: "#000000",
            blue: "rgb(29, 155, 240)",
            grey: "#71767B",
        },
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
