<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Composer\NewComposer;
use App\Models\testing_command;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // view()->composer('testcom', NewComposer::class);
        // View::composer(
        //     'testcom', 'App\Composer\NewComposer'
        // );
        
        // view()->composer('testcom', function ($view) {
        //     $view->with('activeusers', testing_command::all());
        // });
        view()->composer('testcom',NewComposer::class);
    }
}
