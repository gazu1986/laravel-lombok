<?php

namespace Gazu1986\LaravelLombok;

use Illuminate\Support\ServiceProvider;

class LombokServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/lombok.php' => config_path('lombok.php'),
            ], 'lombok-config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lombok.php', 'lombok');
    }
}
