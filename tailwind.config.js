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
        'sans': ['Figtree', 'Roboto', 'Tahoma', 'sans-serif'],
        'serif': ['Instruement Serif', 'Times New Roman', 'Times', 'serif'],
      }
    },
  },
  plugins: [forms],
};
