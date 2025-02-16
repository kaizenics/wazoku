import { defineConfig } from 'vite';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default defineConfig({
  build: {
    outDir: 'dist',
    // Remove rollupOptions.input since we're using the css entry point
    rollupOptions: {
      input: './src/css/main.css',
      output: {
        assetFileNames: (assetInfo) => {
          if (assetInfo.name === 'main.css') {
            return 'main.css';
          }
          return assetInfo.name;
        }
      }
    }
  },
  css: {
    postcss: {
      plugins: [
        tailwindcss,
        autoprefixer,
      ],
    }
  }
});
