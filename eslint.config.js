import { defineConfig } from 'eslint/config';
import js from '@eslint/js';

export default defineConfig([
  {
    ignores: ['assets/dist/**', 'node_modules/**']
  },
  {
    files: ['src/**/*.js', 'vite.config.js'],
    plugins: { js },
    extends: ['js/recommended'],
    languageOptions: {
      ecmaVersion: 'latest',
      sourceType: 'module',
      globals: {
        document: 'readonly'
      }
    }
  }
]);
