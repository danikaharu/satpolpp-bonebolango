<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
        \View::composer('layouts.admin.partials.sidebar', function ($view) {
            $profile = DB::table('profiles')->select('title', 'slug')->get();
            $view->with(['data' => $profile]);
        });
    }
}
