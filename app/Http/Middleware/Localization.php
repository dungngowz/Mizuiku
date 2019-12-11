<?php

namespace App\Http\Middleware;

use Closure;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(isset($_SERVER['REQUEST_URI'])){
            $uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uriSegments = explode('/', trim($uriPath, '/'));

            $keyLocale = ($uriSegments[0] == 'admin') ? config('const.key_locale_admin') : config('const.key_locale_client');

            if(isset($_COOKIE[$keyLocale])){
                $locale = in_array($_COOKIE[$keyLocale], ['vi', 'en']) ? $_COOKIE[$keyLocale] : 'vi';
                \App::setLocale($locale);
            }
        }

        return $next($request);
    }
}
