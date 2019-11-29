<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ref_id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string $thumbnail
 * @property string $description
 * @property string $content
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
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'category_id', 'title', 'slug', 'thumbnail', 'description', 'content', 'status', 'language', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
