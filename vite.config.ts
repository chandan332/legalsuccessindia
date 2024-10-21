import { UserConfig } from "vite";
import laravel from "laravel-vite-plugin";

const config: UserConfig = {
    server: {
        host: '127.0.0.1',
        port: 3000,
    },
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/ts/app.ts"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/ts",
        },
    },
};

export default config;
