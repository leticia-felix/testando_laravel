/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},

      colors: {
        'high-purplle':'#1B132D',
        'orange': '#FC9A03',
        'gray': '#C1C1C1',
        'purplle':'#563274'

      },
    },
    plugins: [],
  }
