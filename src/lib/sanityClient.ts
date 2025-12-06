import { createClient, type SanityClient } from '@sanity/client';
import type { AllSanitySchemaTypes } from './sanityTypes';

if (!process.env.SANITY_STUDIO_PROJECT_ID) {
  throw new Error('Missing SANITY_STUDIO_PROJECT_ID');
}

if (!process.env.SANITY_STUDIO_DATASET) {
  throw new Error('Missing SANITY_STUDIO_DATASET');
}

export const sanity: SanityClient = createClient({
  projectId: process.env.SANITY_STUDIO_PROJECT_ID,
  dataset: process.env.SANITY_STUDIO_DATASET,
  useCdn: false,
  apiVersion: '2025-12-06',
});

// Typed query helper for better type safety
export async function fetchSanity<T = AllSanitySchemaTypes>(
  query: string,
  params?: Record<string, unknown>,
): Promise<T> {
  return params ? sanity.fetch<T>(query, params) : sanity.fetch<T>(query);
}
