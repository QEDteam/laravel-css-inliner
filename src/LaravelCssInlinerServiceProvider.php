<?php

namespace Qed\LaravelCssInliner;

use Illuminate\Support\ServiceProvider;
use Qed\LaravelCssInliner\Providers\EventServiceProvider;

class LaravelCssInlinerServiceProvider extends ServiceProvider
{
    /**
     * Register service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Boot method
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                __DIR__.'/config/cssinliner.php' => config_path('cssinliner.php'),
                ], 'config'
            );
        }
    }
}
