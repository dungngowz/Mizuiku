<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $fullname
 * @property string $phone
 * @property string $email
 * @property string $content
 * @property string $ip
 * @property string $language
 * @property string $created_at
 * @property int $created_user_id
 * @property string $updated_at
 * @property int $updated_user_id
 * @property string $deleted_at
 * @property int $deleted_user_id
 */
class Contact extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['fullname', 'phone', 'email', 'content', 'ip', 'language', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

}
