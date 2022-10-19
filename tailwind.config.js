const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    fontFamily: {
      sans: ["Nunito", ...defaultTheme.fontFamily.sans],
      poppins: ["Poppins", "sans-serif"],
      oswald: ["Oswald", "sans-serif"],
      montserrat: ["Montserrat", "sans-serif"],
    },
    extend: {},
  },

  plugins: [require("@tailwindcss/forms"), require("tw-elements/dist/plugin")],
};
