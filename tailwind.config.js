import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {
      colors: {
        primary: "#ff3030",
      },
      fontFamily: {
        'sans': ['Outfit', 'Roboto', 'Tahoma', 'sans-serif'],
      }
    },
  },
  plugins: [forms],
};
