import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                "fade-in-down": "fade-in-down 0.8s ease-out",
                "fade-in-up": "fade-in-up 0.8s ease-out",
                "zoom-in": "zoom-in 0.8s ease-out",
                "slide-in-bottom": "slide-in-bottom 0.8s ease-out",
                "slide-down": "slideDown 1s ease-out forwards",
            },
            keyframes: {
                "fade-in-down": {
                    "0%": { opacity: "0", transform: "translateY(-20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "fade-in-up": {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "zoom-in": {
                    "0%": { opacity: "0", transform: "scale(0.9)" },
                    "100%": { opacity: "1", transform: "scale(1)" },
                },
                "slide-in-bottom": {
                    "0%": { opacity: "0", transform: "translateY(30px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                slideDown: {
                    "0%": { opacity: "0", transform: "translateY(-20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
            },

            colors: {
                burgundy: "#800020",
                maroon: "#4B1E24",
                peach: "#F4E1D2",
                taupe: "#B89C88",
                beige: "#E5D3C5",
                darkRed: "#8E0037",
                lightRed: "#BA5D5D",
                veryLightRed: "#F0D4D4",
                tan: "#D2B48C",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            transform: ["hover", "group-hover"],
            transitionProperty: {
                height: "height",
                spacing: "margin, padding",
            },
            animation: {
                ripple: "ripple 0.6s linear",
            },
            keyframes: {
                ripple: {
                    "0%": { transform: "scale(0)", opacity: 1 },
                    "100%": { transform: "scale(4)", opacity: 0 },
                },
            },
        },
    },
    plugins: [],
    safelist: [
        "bg-blue-500",
        "bg-red-500",
        "bg-green-500",
        "bg-yellow-500",
        // Tambahkan kelas lainnya yang diperlukan
    ],
};
