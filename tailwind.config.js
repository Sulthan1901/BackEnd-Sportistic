/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ["poppins", "ui-sans-serif", "system-ui", "sans-serif"],
        },
        extend: {
            colors: {
                theme: "#0A061E",
                background: "#1A1531",
                button: "#FFD88D",
                holland: "#FE9A25",
                card: "#27223E",
                light: "#DBD8E9",
                outline: "#353147",
                secondary: "#7E7997",
            },
        },
    },
    plugins: [],
};
