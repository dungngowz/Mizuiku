<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use App\Models\Traits\SortByScope;

/**
 * @property int $id
 * @property int $ref_id
 * @property int $parent_id
 * @property string $type
 * @property string $title
 * @property string $slug
 * @property string $language
 * @property boolean $status
 * @property string $created_at
 * @property int $created_user_id
 * @property string $updated_at
 * @property int $updated_user_id
 * @property string $deleted_at
 * @property int $deleted_user_id
 * @property Article $article
 */
class Category extends SoftModelBase
{
    use Sluggable;
    use SortByScope;
    
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'parent_id', 'type', 'title', 'slug', 'priority', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

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

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function getUrlDetailNewsAttribute() {
        return url('tin-tuc/' . $this->slug . '/?ref_id=' . $this->ref_id);
    }
}
