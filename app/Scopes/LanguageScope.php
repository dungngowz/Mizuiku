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
        $keyLanguage = $prefixRoute == 'admin' ? 'admin-locale' : 'client-locale';
        $sessionLanguage = session($keyLanguage);

        if(in_array($sessionLanguage, ['vi', 'en'])){
            $tableName = $builder->getModel()->getTable();
            $builder->where($tableName.'.language', $sessionLanguage);
        }
        
    }
}