<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;
use Illuminate\Support\Facades\Storage;
use App\Models\Traits\SortByScope;

/**
 * @property int $id
 * @property int $ref_id
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
class Banner extends SoftModelBase
{
    use Sluggable;
    use SortByScope;

    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'type', 'title', 'slug', 'priority', 'language', 'url', 'thumbnail', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

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
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getThumbnailDisplayAttribute(){
        $parsed = parse_url($this->thumbnail);
        if (empty($parsed['scheme'])) {
            return $this->thumbnail ? Storage::url($this->thumbnail) : 'admin/dist/images/banner-default.jpg';
        }
        return $this->thumbnail;
    }
}
