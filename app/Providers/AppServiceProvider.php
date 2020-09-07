<?php

namespace App\Providers;

use App\Models\Activity;
use App\Models\Alert;
use App\Observers\ActivityObserver;
use App\Observers\AlertObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Activity::observe(ActivityObserver::class);
        Alert::observe(AlertObserver::class);

    }
}
