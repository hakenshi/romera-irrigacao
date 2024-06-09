/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'romera-green': {
          '50': '#f0fdf4',
          '100': '#dcfce7',
          '200': '#bbf7d0',
          '300': '#86efab',
          '400': '#4ade7f',
          '500': '#22c55d',
          '600': '#16a349',
          '700': '#168840',
          '800': '#166534',
          '900': '#14532d',
          '950': '#052e16',
      },
      'romera-light-blue': {
        '50': '#f0f9ff',
        '100': '#e0f2fe',
        '200': '#b9e7fe',
        '300': '#7cd4fd',
        '400': '#36c0fa',
        '500': '#0ca9eb',
        '600': '#008fd5',
        '700': '#016ba3',
        '800': '#065a86',
        '900': '#0b4b6f',
        '950': '#07304a',
    },
    'romera-blue': {
        '50': '#edf3ff',
        '100': '#dee8ff',
        '200': '#c4d4ff',
        '300': '#a1b7ff',
        '400': '#7b90fe',
        '500': '#5c69f8',
        '600': '#3e40ed',
        '700': '#3231d1',
        '800': '#2a2aa9',
        '900': '#2e3192',
        '950': '#19194d',
    },
    
    }
  },
  },
  plugins: [],
}