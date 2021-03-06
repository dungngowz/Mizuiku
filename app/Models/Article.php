<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Traits\SortByScope;

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
    use SortByScope;

    public $timestamps = true;
    
    protected $dates = ['created_at', 'updated_at'];

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'category_id', 'title', 'slug', 'thumbnail', 'description', 'content', 'keyword', 'status', 'url', 'priority', 'language', 'views', 'video_duration', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

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
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery', 'post_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'learning_outcomes', 'user_id', 'video_id');
    }

    public function learningOutcomes()
    {
        return $this->hasMany('App\Models\LearningOutcomes', 'video_ref_id');
    }

    /**
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getThumbnailDisplayAttribute(){
        $parsed = parse_url($this->thumbnail);
        if (empty($parsed['scheme'])) {
            return $this->thumbnail ? Storage::url($this->thumbnail) : 'admin/dist/images/370x250.png';
        }
        return $this->thumbnail;
    }

    /**
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getUrlDetailAboutUsAttribute(){
        return url('gioi-thieu/' . $this->slug . '?ref_id=' . $this->ref_id);
    }

    /**
     * Return the custom url detail news
     *
     * @return string
     */
    public function getUrlDetailNewsAttribute() {
        return url('tin-tuc/' . $this->category->slug . '/' . $this->slug . '/?ref_id=' . $this->ref_id);
    }

    /**
     * Return the custom url detail library
     *
     * @return string
     */
    public function getUrlDetailLibraryAttribute() {
        return url('thu-vien/' . $this->keyword . '/' . $this->slug . '/?ref_id=' . $this->ref_id);
    }
}
