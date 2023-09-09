/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: "#ff3030",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
