import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/css/statics.css', // Añadido manualmente para incluir hoja de estilos personalizada
                    'resources/css/cruds.css', // Añadido manualmente para incluir hoja de estilos personalizada
                    'resources/js/app.js'
                ],
            refresh: true,
        }),
    ],
});
