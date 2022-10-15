/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontSize: {
            sm: ["0.75rem", "1rem"],
            base: ["0.875rem", "1.25rem"],
            lg: ["1rem", "1.5rem"],
            xl: ["1.125rem", "1.75rem"],
            "2xl": ["1.25rem", "1.75rem"],
            "3xl": ["1.5rem", "2rem"],
            "4xl": ["1.875rem", "2.25rem"],
            "5xl": ["2.25rem", "2.5rem"],
        },
        extend: {},
    },
    plugins: [require("tailwindcss-flip"), require("@tailwindcss/forms")],
};
