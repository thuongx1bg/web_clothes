<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        View::composer('fe.patials.headerfe', function ($view) {
            $settings=DB::table('settings')->get();
            $categories=DB::table('categories')->where('parent_id', '0')->orderby('id', 'desc')->get();
            
    

            $view->with('settings', $settings);
            $view->with('categories', $categories);
        });


        Schema::defaultStringLength(191);
    }
}
