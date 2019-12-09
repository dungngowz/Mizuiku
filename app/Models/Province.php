<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $table = 'provinces';
    /**
     * @var array
    */
    protected $fillable = ['parent_id', 'name_vi', 'name_en', 'create_user', 'update_user'];
}
