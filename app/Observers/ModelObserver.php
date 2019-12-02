<?php
namespace App\Observers;

use App\Models\Base;
use Illuminate\Support\Facades\Auth;

class ModelObserver
{
    /**
     * Listen to the Model creating event.
     *
     * @param  Base  $model
     * @return void
     */
    public function creating(Base $model)
    {
        if(Auth::user() && !$model->created_user_id && !$model->updated_user_id)
        {
            if(class_basename($model) == 'User') {
                $model->createUsername();
            }

            $model->created_user_id = Auth::user()->id;
            $model->updated_user_id = Auth::user()->id;
        }
    }

    /**
     * Listen to the Model updating event.
     *
     * @param  Base  $model
     * @return void
     */
    public function updating(Base $model)
    {
        if(Auth::user()) {
            $model->updated_user_id = Auth::user()->id;
        }
    }

    /**
     * Listen to the Model deleting event.
     *
     * Deleting is pretty different, We have to manual update `deleted_user_id` column
     * Because soft delete trait is only update 2 columns: `updated_at` and `deleted_at`.
     *
     * @param  Base  $model
     * @return void
     */
    public function deleting(Base $model)
    {
        if(Auth::user()) {
            $query = $model->newQueryWithoutScopes()->where($model->getKeyName(), $model->getKey());
            $query->update(['deleted_user_id' => Auth::user()->id]);
        }
    }

    public function saved(Base $model)
    {
        
    }

    public function deleted(Base $model)
    {
        
    }

}