const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./**/*.php",
    "./*.php",
    "./src/js/*.js",
    "./src/bin/*.vue",
    "./src/bin/**/*.vue",
  ],
  variants: {
    extend: {
      border: ['last'],
      textColor: ['odd', 'even'],
    }
  },
  theme: {
    extend: {
      fontFamily: {
        'walkway_black' : ['walkway_black', ...defaultTheme.fontFamily.sans],
        'walkway_bold' : ['walkway_bold', ...defaultTheme.fontFamily.sans],
        'walkway_semi_bold' : ['walkway_semi_bold', ...defaultTheme.fontFamily.sans],
        'walkway_oblique_bold' : ['walkway_oblique_bold', ...defaultTheme.fontFamily.sans],
        'walkway_ultra_bold' : ['walkway_ultra_bold', ...defaultTheme.fontFamily.sans],
        'open_sans_regular' : ['open_sans_regular', ...defaultTheme.fontFamily.sans],
        'open_sans_bold' : ['open_sans_bold', ...defaultTheme.fontFamily.sans],
        'open_sans_extra_bold' : ['open_sans_extra_bold', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: theme => ({
         "blue_gradient" : 'linear-gradient(to right, rgba(43,59,144,0.1) 0%, rgba(0,183,239, 0.1) 100%)',
          "steel_pink_gradient" : 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(211,55,244,0.1) 100%)',
          "green_gradient": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(20,196,57,0.1) 100%)',
          "orange_gradient": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(227,94,50,.1) 100%)',
          "red_gradient": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(234,42,45,0.1) 100%)',
          "blue_gradient_half" : 'linear-gradient(to right, rgba(43,59,144,0.1) 0%, rgba(0,183,239, 0.5) 100%)',
          "steel_pink_gradient_half" : 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(211,55,244,0.5) 100%)',
          "green_gradient_half": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(20,196,57,0.5) 100%)',
          "orange_gradient_half": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(227,94,50,.5) 100%)',
          "red_gradient_half": 'linear-gradient(90deg, rgba(43,59,144,0.1) 0%, rgba(234,42,45,0.5) 100%)'
      }),
      colors: {
        'dark' :'#04031A',
        "white": "#fff",
        "grey": "#ccc",
        'light-purple': "#dbe0ff",
        'darker-purple': "#B4BEFF",
        'purple': "#6076FF;",
        "blue" : "#1994BA",
        "steel-pink" : "#D337F4", 
        "green" : "#2EB04B",
        "orange" : "#E35E32", 
        "red": "#EA2A2D",
        'dark-blue': 'rgb(4, 3, 26, 0.9)'
      }
    },
    container: {
      center: true,
      padding: '1rem',
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      "lg": '1024px',
      'xl': '1280px', 
      '1xl': '1366px', 
      '2xl' : '1536px',
      '3xl': '1920px',
      '4xl' : '2560px',
      '5xl' : '3200px'
    }
  },
  plugins: [

  ]
}
