import type { PortableTextBlock } from '@portabletext/types';

export interface BodyBlock {
  _type: string;
  body: PortableTextBlock[];
}
