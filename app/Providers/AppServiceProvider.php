<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        if(isset($_SERVER['REQUEST_URI'])){
            $uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uriSegments = explode('/', trim($uriPath, '/'));

            $keyLocale = ($uriSegments[0] == 'admin') ? 'admin-locale' : config('const.key_locale_client');

            if(isset($_COOKIE[$keyLocale])){
                $locale = in_array($_COOKIE[$keyLocale], ['vi', 'en']) ? $_COOKIE[$keyLocale] : 'vi';
                App::setLocale($locale);
            }
        }

        // Send Email Verify
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            $user = $notifiable->toArray();

            return (new MailMessage)
                ->subject(config('app.name'))
                ->markdown('mails.verify-message', [
                    'name' => $user['name'],
                    // 'email' => $user['email'],
                    // 'password' => $user['password'],
                    'url_verify' => $url
            ]);
        });
    }
}
