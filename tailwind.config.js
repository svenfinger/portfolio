/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    fontFamily: {
      sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      serif: ['Castoro', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      colors: {
        'gray': colors.neutral,
      },
      screens: {
        '3xl': '1920px',
      },
      boxShadow: {
        'outline': 'inset 0 0 0 1px',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

