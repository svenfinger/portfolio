import { createClient } from '@sanity/client';

if (!process.env.SANITY_STUDIO_PROJECT_ID) {
  throw new Error('Missing SANITY_STUDIO_PROJECT_ID');
}

if (!process.env.SANITY_STUDIO_DATASET) {
  throw new Error('Missing SANITY_STUDIO_DATASET');
}

export const sanity = createClient({
  projectId: process.env.SANITY_STUDIO_PROJECT_ID,
  dataset: process.env.SANITY_STUDIO_DATASET,
  useCdn: false,
});
