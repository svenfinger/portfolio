import { sanity } from './sanityClient';
import type { Work } from './sanityTypes';

export async function resolveWorkRefs(refs: { _ref: string }[]): Promise<Work[]> {
  if (!refs?.length) return [];

  const ids = refs.map((ref) => ref._ref);
  const query = `*[_type == "work" && _id in $ids]`;

  return await sanity.fetch<Work[]>(query, { ids });
}
