<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\SoftModelBase;
use App\Scopes\LanguageScope;

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
class ProgramTimeline extends SoftModelBase
{
    use Sluggable;

    public $timestamps = true;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'program_timeline';

    /**
     * @var array
     */
    protected $fillable = ['ref_id', 'title', 'slug', 'month', 'content', 'language', 'status', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LanguageScope);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function getMonthDisplayAttribute() {
        $locale = session('client-locale');
        
        if($locale == 'vi'){
            return 'Tháng ' . $this->month;
        }

        $dateObj = \DateTime::createFromFormat('!m', $this->month);
        return $dateObj->format('F');
    }
}
