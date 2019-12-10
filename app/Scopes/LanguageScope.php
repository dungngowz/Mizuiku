<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class LanguageScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $tableName = $builder->getModel()->getTable();
        $prefixRoute = trim(request()->route()->getPrefix(), '/');

        if($prefixRoute == 'admin'){
            $keyLocale = 'admin-locale';

            if(isset($_COOKIE[$keyLocale]) && in_array($_COOKIE[$keyLocale], ['vi', 'en'])){
                $builder->where($tableName.'.language', $_COOKIE[$keyLocale]);
            }

        }else{
            $keyLocale = config('const.key_locale_client');
            $locale = isset($_COOKIE[$keyLocale]) ? $_COOKIE[$keyLocale] : 'vi';
            $builder->where($tableName.'.language', $locale);
        }
    }
}