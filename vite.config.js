// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: 'resources/js/app.js',
//             refresh: true,
//         }),
//         vue({
//             template: {
//                 transformAssetUrls: {
//                     base: null,
//                     includeAbsolute: false,
//                 },
//             },
//         }),
//     ],
// });

// vite.config.js
// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/js/app.js', 'resources/css/app.css'],
//             refresh: true,
//         }),
//         vue(),
//     ],
// });

// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/js/app.js'],
//             refresh: true,
//         }),
//         vue(),
//     ],
//     server: {
//         port: 3000, // Your specified port
//         host: true, // Make it accessible on your network
//     },
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        port: 3000,
        host: 'localhost',
        history: {
            // This configuration is important to handle Vue Router history mode
            // Make sure your server can handle the routes correctly
            mode: 'html', 
        },
    },
});



