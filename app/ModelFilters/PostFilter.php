<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class PostFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function title(string $title)
    {
        return $this->where('title', 'like', "%{$title}%");
    }

    public function content(string $content)
    {
        return $this->where('content', 'like', "%{$content}%");
    }

    public function categoryId(string $categoryId)
    {
        return $this->where('content', '=', $categoryId);
    }
}
