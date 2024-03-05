import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    build: { chunkSizeWarningLimit: 1600, },
    plugins: [
        laravel([
            'resources/js/app.js',
            'resources/js/bootstrap.js',
            'resources/js/js.js',
            'resources/js/scripts.js',
            'resources/css/catalog.css',
            'resources/css/full-card-product.css',
            'resources/css/header-footer.css',
            'resources/css/components/zero.css',
            'resources/css/components/index.css',
            'resources/css/components/card-style.css',
            'resources/css/components/form-style.css',
            'resources/js/drop-notification-block.js',
            'resources/css/app.css',
            'resources/css/styles.css',
            'resources/js/code.jquery.com_jquery-3.7.1.min.js',
            'resources/js/coments.js',
            'resources/js/burger-button.js',
            'resources/js/drop-down-exite.js'
        ]),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
