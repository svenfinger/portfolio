import { sanity } from './sanityClient';

export async function resolveWorkRefs(refs: { _ref: string }[]) {
  if (!refs?.length) return [];

  const ids = refs.map((ref) => ref._ref);
  const query = `*[_type == "work" && _id in $ids]`;

  return await sanity.fetch(query, { ids });
}
