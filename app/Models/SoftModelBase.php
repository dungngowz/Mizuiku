<?php
namespace App\Models;

use App\Models\Base;
use App\Observers\ModelObserver;

class SoftModelBase extends Base 
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::observe(ModelObserver::class);
    }

    public function createdUser() {
        return $this->belongsTo(\App\Models\User::class, 'created_user_id');
    }

    public function updatedUser() {
        return $this->belongsTo(\App\Models\User::class, 'updated_user_id');
    }

    public function deletedUser() {
        return $this->belongsTo(\App\Models\User::class, 'deleted_user_id');
    }
}