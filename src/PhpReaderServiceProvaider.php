<?php

namespace ZeroPlex\PhpReader;

use Illuminate\Support\ServiceProvider;
use ZeroPlex\DocuSign\Facades\PhpReader;

class PhpReaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/php-reader.php', 'php-reader');

        $this->app->singleton('zeroplex.php-reader', function ($app) {
            return new PhpReader();
        });
    }
}

