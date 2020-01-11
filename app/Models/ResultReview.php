<?php

namespace App\Models;

use App\Models\SoftModelBase;

class ResultReview extends SoftModelBase
{
    
    public $timestamps = true;

    public $table = 'result_review';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'content', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
