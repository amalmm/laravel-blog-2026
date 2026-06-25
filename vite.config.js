import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny,google } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                // bunny('Instrument Sans', {
                //     weights: [400, 500, 600],
                // }),
                google('Noto Sans Grantha', {         
                    weights: [400],                   
                    alias: 'brand',                  
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
