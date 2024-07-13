// const { addDynamicIconSelectors } = require('@iconify/tailwind');

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./node_modules/flowbite/**/*.js",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark-purple': "#5526BF",
        'light-purple' : "#5B89FF",
        'lighter-purple' : "#7F51E7",
        'darker-gray' : "#454545",
      },
      container: {
        center: true,
      },
    },
    fontFamily: {
      body: ['"Poppins"'],
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp')
  ],
}

