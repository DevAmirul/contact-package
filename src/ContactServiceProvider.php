<?php

namespace Amirul\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    /**
     * Register contact package services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap contact package services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom( __DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }
}
