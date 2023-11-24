/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'Poppins': ['Poppins', 'sans-serif'],
      },
      colors:{
        'primary': '#241704',
     
      },
    },
  },
  plugins: [],
}