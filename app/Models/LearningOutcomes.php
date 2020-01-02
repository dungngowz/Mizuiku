<?php

namespace App\Models;

use App\Models\SoftModelBase;

class LearningOutcomes extends SoftModelBase
{

    protected $fillable = ['user_id', 'video_ref_id', 'course_ref_id', 'created_at', 'created_user_id', 'updated_at', 'updated_user_id', 'deleted_at', 'deleted_user_id'];

    
}
