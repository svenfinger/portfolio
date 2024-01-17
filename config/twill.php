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
                'default' => [
                    [
                        'name' => 'default',
                    ],
                ],
            ],
        ],
    ],
];
