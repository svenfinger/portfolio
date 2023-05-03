/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    fontFamily: {
      'sans': ['Inter', ...defaultTheme.fontFamily.sans],
      'display': ['Manrope', ...defaultTheme.fontFamily.sans],
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

