/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // backgroundImage: {
            //     "buma-back": "url('public/img/buma.png')",
            // },
        },
    },
    plugins: [require("flowbite/plugin")],
    darkMode: "class",
};
