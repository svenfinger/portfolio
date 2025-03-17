<?php

return [
    'enabled' => [
        'buckets' => true,
    ],
    'buckets' => [
        'homepage' => [
            'name' => 'Home',
            'buckets' => [
                'home_featured_work' => [
                    'name' => 'Home Featured Work',
                    'bucketables' => [
                        [
                            'module' => 'work',
                            'name' => 'Work',
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
                'default' => [
                    [
                        'name' => 'default',
                    ],
                ],
            ],
        ],
    ],
    'media_library' => [
        'allowed_extensions' => ['jpg', 'png', 'gif', 'svg', 'mp4', 'mov', 'webm'],
    ]
];
