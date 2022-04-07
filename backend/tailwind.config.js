const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xs: "400px",
                xl: "1240px",
                "2xl": "1240px",
            },
            colors: {
                primary: "#13C4A1",
                secondary: "#FF8A73",
                transparent: "transparent",
            },
            spacing: {
                "8xl": "96rem",
                "9xl": "128rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
