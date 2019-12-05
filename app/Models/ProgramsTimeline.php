<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class ProgramsTimeline extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'programs_timeline';

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'title', 'slug', 'month', 'link', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

}
