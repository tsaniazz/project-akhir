/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.{js,ts,jsx,tsx}",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#4A3AFF",
      },
    },
  },
  plugins: [],
}