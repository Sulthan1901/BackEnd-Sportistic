/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ["Poppins", "ui-sans-serif", "system-ui", "sans-serif"],
            fraunces: ["Fraunces", "serif"],
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
            animation: {
                scroll: "scroll 10s linear infinite",
            },
            keyframes: {
                scroll: {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
        plugins: [],
    },
};
