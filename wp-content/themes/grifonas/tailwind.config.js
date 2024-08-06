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
        poppins: ["Poppins", "sans-serif"],
        quicksand: ["Quicksand", "sans-serif"],
        inter: ["Inter", "sans-serif"],
      },
      colors: {
        blackGR: "#26272B",
        whiteGR: "#FFFFFF",
        blueGR: "#D2E6FF",
        lblueGR: "#E9F1FB",
        aquaGR: "#CFFFFD",
        brownGR: "#8A817C",
        aliceBlueGR: "#F7FBFF",
      },
      backgroundPosition: {
        'banner-image-position': '0% 30%',
      }
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
