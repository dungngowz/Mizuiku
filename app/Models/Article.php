<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
    
    protected $dates = ['created_at', 'updated_at'];

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
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getThumbnailDisplayAttribute(){
        $parsed = parse_url($this->thumbnail);
        if (empty($parsed['scheme'])) {
            return $this->thumbnail ? Storage::url($this->thumbnail) : 'admin/dist/images/noimage.jpg';
        }
        return $this->thumbnail;
    }

    /**
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getUrlDetailAboutUsDisplayAttribute(){
        return url('detail-introduction/' . $this->slug . '?ref_id=' . $this->ref_id);
    }

    /**
     * Return the custom url detail news
     *
     * @return string
     */
    public function getUrlDetailNewsAttribute() {
        return url('tin-tuc/' . $this->category->slug . '/' . $this->slug . '/?ref_id=' . $this->ref_id);
    }
}
