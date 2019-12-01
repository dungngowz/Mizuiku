<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'parent_id', 'type', 'title', 'slug', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
}
