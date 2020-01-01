<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public $timestamps = true;
    public $table = 'comment';
    /**
     * @var array
     */
    protected $fillable = ['table_name', 'post_id', 'content', 'status', 'ip', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_user_id');
    }
}
