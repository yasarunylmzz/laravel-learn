/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.vue',
      './resources/**/*.js'
  ],
  theme: {
    extend: {
        colors: {
            "laracasts": "rgb(50,138,241)",
        }
    },
  },
  plugins: [],
}

