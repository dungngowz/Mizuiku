<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SoftModelBase;
use Illuminate\Support\Facades\Storage;

class Gallery extends SoftModelBase
{
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];
    public $table = 'gallery';
    
    /**
     * @var array
     */
    protected $fillable = ['table_name', 'post_id', 'file_name', 'file_path', 'size', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

    /**
     * Return the custom thumbnail
     *
     * @return string
     */
    public function getThumbnailDisplayAttribute(){
        $parsed = parse_url($this->file_path);
        if (empty($parsed['scheme'])) {
            return $this->file_path ? Storage::url($this->file_path) : 'admin/dist/images/370x250.png';
        }
        return $this->file_path;
    }

    public function getFormatBytesAttribute() { 
        $bytes = $this->size;
        $i = floor(log($bytes) / log(1024));
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

        return sprintf('%.02F', $bytes / pow(1024, $i)) * 1 . ' ' . $sizes[$i];
    }
}
