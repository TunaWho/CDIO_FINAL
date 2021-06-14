<?php

namespace App\Providers;

use App\Models\AcceptRequest;
use App\Models\Donate;
use App\Models\SendRequest;
use App\Models\User;
use App\Observers\AcceptObserver;
use App\Observers\DonateObserver;
use App\Observers\ProfileObserver;
use App\Observers\SendRequestObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(ProfileObserver::class);
        SendRequest::observe(SendRequestObserver::class);
        Donate::observe(DonateObserver::class);
        AcceptRequest::observe(AcceptObserver::class);
    }
}
