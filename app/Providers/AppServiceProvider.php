<?php

namespace App\Providers;

use App\Listeners\SetTenantIdInSession;
use App\Listeners\UnSetTenantIdInSession;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(Login::class, SetTenantIdInSession::class);
        Event::listen(Logout::class, UnSetTenantIdInSession::class);
    }
}
