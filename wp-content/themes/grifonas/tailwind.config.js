/** @type {import('tailwindcss').Config} */
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
      border: ["last"],
      textColor: ["odd", "even"],
    },
  },
  theme: {
    extend: {
      fontFamily: {
        manrope: ["Manrope", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],
      },
      colors: {
        jewel: "#126B3A",
        baltic_sea: "#2B2A29",
        fern_green: "#5C9246",
        turtle_green: "#87B14B",
        harp: "#EAF0E0",
        moon_mist: "#D2E0C1",
        white_smoke: "#F6F6F5",
        grey: "#A7A7A7",
      },
    },
    container: {
      center: true,
      padding: "1rem",
    },
    screens: {
      xs: "320px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "1xl": "1366px",
      "2xl": "1536px",
      "3xl": "1920px",
      "4xl": "2560px",
      "5xl": "3200px",
    },
  },
  plugins: [],
};
