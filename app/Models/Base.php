<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Collection\PaginableCollection;

class Base extends Model 
{
    /**
     * Check if table is already joined in Laravel Query Builder
     * @param  [Query]  $query
     * @param  [string]  $table table name
     * @return boolean
     */
    public static function isJoined($query, $table)
    {
        $joins = $query->getQuery()->joins;
        if($joins == null) {
            return false;
        }
        foreach ($joins as $join) {
            if ($join->table == $table) {
                return true;
            }
        }
        return false;
    }
}