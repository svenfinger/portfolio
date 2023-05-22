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
    ];

    public $slugAttributes = [
        'title',
    ];

}
