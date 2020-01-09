<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use Illuminate\Support\Facades\Storage;
use App\Models\Traits\SortByScope;

class Contact extends SoftModelBase
{
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['fullname', 'phone', 'email', 'content', 'ip', 'language', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

}
