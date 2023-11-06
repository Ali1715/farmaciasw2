import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js','resources/css/styleguide.css','resources/css/style.css','resources/css/globals.css','../public/img'
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
                'resorces/css/**',
                'resources/js/**',
            ],
        }),
    ],
});
