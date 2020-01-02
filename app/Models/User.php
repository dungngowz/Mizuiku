<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use App\Mail\ForgotPass;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'sex', 'career', 'city', 'district', 'work_place', 'avatar', 'learning_process'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'learning_outcomes', 'video_id', 'user_id');
    }

    public function learningOutcomes()
    {
        return $this->hasMany('App\Models\LearningOutcomes');
    }

    public function sendPasswordResetNotification($token)
    {
        Mail::to($this->email)->send(new ForgotPass($this, $token));
        // $this->notify(new ResetPassword($token));
    }

    /**
     * Return the custom avatar
     *
     * @return string
     */
    public function getAvatarAttribute(){
       return $this->attributes['avatar'] ? \Storage::url($this->attributes['avatar']) : asset('client/pic/icon/no_image.gif');
    }
}
