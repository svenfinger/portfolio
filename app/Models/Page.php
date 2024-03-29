<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Page extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'noindex',
        'position',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function next($page){
        return Page::where('position', '>', $page->position)->where('published', 1)->orderBy('position', 'asc')->first();
    }
}
