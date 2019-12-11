<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait SortByScope
{


    /**
     * Custom scope (query builder method) to easy return all items from today
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSortBy($query)
    {
        return $query->orderBy('priority', 'desc')->orderBy('id', 'desc');
    }

}