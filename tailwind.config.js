module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        screens: {
            '3xl': '1600px',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
