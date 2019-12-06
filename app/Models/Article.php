<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;

/**
 * @property int $id
 * @property int $ref_id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string $thumbnail
 * @property string $description
 * @property string $keyword
 * @property string $content
 * @property int $priority
 * @property boolean $status
 * @property string $language
 * @property string $created_at
 * @property int $created_user_id
 * @property string $updated_at
 * @property int $updated_user_id
 * @property string $deleted_at
 * @property int $deleted_user_id
 * @property Category $category
 */
class Article extends SoftModelBase
{
    use Sluggable;

    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'category_id', 'title', 'slug', 'thumbnail', 'description', 'content', 'keyword', 'status', 'url', 'priority', 'language', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category');
    }
}
