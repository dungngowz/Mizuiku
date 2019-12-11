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
