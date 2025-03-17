<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Work extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'year',
        'company',
        'description',
        'position',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $filesParams = [
        'feature_video',
        'grid_video',
    ];

    public $mediasParams = [
        'feature' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 3 / 2,
                ],
            ],
        ],
        'grid' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 'square',
                ],
            ],
        ],
        'social_preview' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1.91,
                ],
            ],
        ],
    ];

    public function next($work){
        return Work::where('position', '>', $work->position)->where('published', 1)->orderBy('position', 'asc')->first();
    }
}
