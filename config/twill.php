<?php

return [
    'enabled' => [
        'buckets' => true,
    ],
    'buckets' => [
        'homepage' => [
            'name' => 'Home',
            'buckets' => [
                'home_featured_projects' => [
                    'name' => 'Home Featured Projects',
                    'bucketables' => [
                        [
                            'module' => 'project',
                            'name' => 'Projects',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 4,
                ],
            ],
        ],
    ],
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ],
];
