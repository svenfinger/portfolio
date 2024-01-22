<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Project extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'year',
        'client',
        'company',
        'description',
        'type',
        'role',
        'process',
        'tools',
        'position',
        'link_primary',
        'link_primary_label',
        'link_secondary',
        'link_secondary_label'
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 'square',
                ],
            ],
        ],
        'share' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
        'images' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
        ]
    ];

    public function next($project){
        return Project::where('position', '>', $project->position)->where('published', 1)->orderBy('position', 'asc')->first();
    }
}
