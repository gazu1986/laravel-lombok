<?php

namespace Gazu1986\LaravelLombok;

use Illuminate\Support\ServiceProvider;

class LombokServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config
        $this->publishes([
            dirname(__DIR__) . '/config/lombok.php' => $this->app->basePath('config/lombok.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/lombok.php', 'lombok');
    }
}
