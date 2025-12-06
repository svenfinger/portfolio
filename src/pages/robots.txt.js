export async function GET({ site }) {
  const robots = `User-agent: *
Allow: /

Sitemap: ${site}sitemap-index.xml`;

  return new globalThis.Response(robots, {
    headers: {
      'Content-Type': 'text/plain',
    },
  });
}
