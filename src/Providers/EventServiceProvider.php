<?php

namespace Qed\LaravelCssInliner\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Illuminate\Mail\Events\MessageSending' => [
            'Qed\LaravelCssInliner\Listeners\FormatEmailContent',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
