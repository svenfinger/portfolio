// @ts-check
import 'dotenv/config';
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';
import sanity from '@sanity/astro';
import { execSync } from 'node:child_process';

let commitHash = 'unknown';

try {
  commitHash = execSync('git rev-parse --short HEAD').toString().trim();
} catch {
  throw new Error('Git commit hash not found');
}

if (!process.env.SANITY_STUDIO_PROJECT_ID) {
  throw new Error('Missing SANITY_STUDIO_PROJECT_ID');
}

if (!process.env.SANITY_STUDIO_DATASET) {
  throw new Error('Missing SANITY_STUDIO_DATASET');
}

export default defineConfig({
  trailingSlash: 'never',
  prefetch: {
    prefetchAll: true,
  },

  vite: {
    plugins: [tailwindcss()],
    define: {
      'import.meta.env.PUBLIC_COMMIT_HASH': JSON.stringify(commitHash),
    },
  },

  integrations: [
    sanity({
      projectId: process.env.SANITY_STUDIO_PROJECT_ID,
      dataset: process.env.SANITY_STUDIO_DATASET,
      useCdn: false,
    }),
  ],
});
