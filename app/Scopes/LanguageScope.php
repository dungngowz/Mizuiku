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
        $prefixRoute = trim(request()->route()->getPrefix(), '/');
        $keyLocale = $prefixRoute == 'admin' ? config('const.key_locale_admin') : config('const.key_locale_client');

        if(isset($_COOKIE[$keyLocale]) && in_array($_COOKIE[$keyLocale], ['vi', 'en']) ){
            $tableName = $builder->getModel()->getTable();
            $builder->where($tableName.'.language', $_COOKIE[$keyLocale]);
        }
    }
}