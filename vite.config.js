import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    manifest: 'manifest.json',
    outDir: 'assets/dist',
    emptyOutDir: true,
    sourcemap: false,
    rollupOptions: {
      input: 'src/scss/app.scss',
      output: {
        entryFileNames: 'js/[name]-[hash].js',
        chunkFileNames: 'js/[name]-[hash].js',
        assetFileNames: ({ names = [] }) => {
          const firstName = names[0] ?? '';
          return firstName.endsWith('.css') ? 'css/[name]-[hash][extname]' : 'media/[name]-[hash][extname]';
        }
      }
    }
  }
});
