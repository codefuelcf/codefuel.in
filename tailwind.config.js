import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.jsx", "./resources/**/*.css"],
  theme: {
    extend: {
      colors: {
        primary: "#ff3030",
      },
      fontFamily: {
        'sans': ['Outfit', 'Roboto', 'Tahoma', 'sans-serif'],
        'serif': ['Instrument Serif', 'Times New Roman', 'Times', 'serif'],
      }
    },
  },
  plugins: [forms],
};
