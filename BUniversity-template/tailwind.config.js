/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    fontFamily: {
      montserrat: ["Montserrat", "sans-serif"],
      poppins: ["Poppins", "sans-serif"],
    },
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      keyframes: {
        fade: {
          "0%": {
            opacity: 1,
          },
          "20%": {
            opacity: 1,
          },
          "34%": {
            opacity: 0,
          },
          "88%": {
            opacity: 0,
          },
          "100%": {
            opacity: 1,
          },
        },
      },
      animation: {
        fade: "fade 15s infinite",
      },
      colors: {
        primary: {
          0: "#D6E3FF",
          100: "#5E83D5",
          200: "#264790",
        },
        secondary: {
          pink: "#EB3678",
          purple: "#7C00FE",
          yellow: "#FFB831",
          error: "#EB3636",
          success: "#19B500",
          info: "#31A8FF",
        },
        xneutral: {
          0: "#FFFFFF",
          100: "#D9D9D9",
          200: "#939393",
          300: "#565656",
          400: "#272829",
        },
      },
    },
  },
  plugins: [],
};
