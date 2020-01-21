<?php

namespace App\Models;

use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use App\Models\Traits\SortByScope;

class Quiz extends SoftModelBase
{
    use SortByScope;
    
    public $timestamps = true;

    public $table = 'quiz';

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'title', 'option1', 'option2', 'option3', 'option4', 'option5', 'option6', 'another', 'priority', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LanguageScope);
    }
}
