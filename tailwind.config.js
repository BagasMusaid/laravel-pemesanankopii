/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontfamily: {
                pasific: ['"Pacifico"', "cursive"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
