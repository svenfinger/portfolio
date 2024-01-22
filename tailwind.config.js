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
        'blue': {
          50: '#F5F6FF',
          100: '#E5E9FF',
          200: '#D1D7FF',
          300: '#B8C1FF',
          400: '#8F9EFF',
          500: '#667AFF',
          600: '#3853FF',
          700: '#0022FF',
          800: '#001CD1',
          900: '#0017AA',
          950: '#000E6B',
        },
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

