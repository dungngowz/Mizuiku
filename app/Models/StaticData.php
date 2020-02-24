<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;

/**
 * @property int $id
 * @property int $ref_id
 * @property string $title
 * @property string $slug
 * @property int $month
 * @property string $link
 * @property string $language
 * @property boolean $status
 * @property string $created_at
 * @property int $created_user_id
 * @property string $updated_at
 * @property int $updated_user_id
 * @property string $deleted_at
 * @property int $deleted_user_id
 */
class StaticData extends SoftModelBase
{
    public $timestamps = true;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'static_data';

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'type', 'content', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

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
