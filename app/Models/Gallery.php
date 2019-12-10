<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SoftModelBase;

class Gallery extends SoftModelBase
{
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];
    public $table = 'gallery';
    
    /**
     * @var array
     */
    protected $fillable = ['table_name', 'post_id', 'file_name', 'file_path', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

}
