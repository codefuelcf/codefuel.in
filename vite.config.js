import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/front.css",
                "resources/css/tailwind.css",
                "resources/js/front.js",
                "resources/js/typed.js",
            ],
            refresh: true,
        }),
    ],
});
