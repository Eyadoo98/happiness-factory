/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            height: {
                "height-800": "800px",
            },
            left: {
                "left-400": "400px",
            },
            backgroundImage: {
                "CHRONICLES-Img1": "url('/images/door.png')",
            },
            colors: {
                tomato: "#E97E73",
                brown: "#C18B7B",
                navy: "#1D2D5C",
            },
            lineHeight: {
                70: "70px",
            },
            width: {
                "24rem": "24rem",
                188: "188px",
            },
            minHeight: {
                137: "137px",
            },
            screens: {
                medium: "768px",
                customLargeScreen: "1691px",
                // => @media (min-width: 768px) { ... }
            },
            padding: {
                "66": "17rem",
            },
        },
    },
    plugins: [],
};
