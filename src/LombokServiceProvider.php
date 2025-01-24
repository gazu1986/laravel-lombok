<?php

namespace Gazu1986\LaravelLombok;

use Illuminate\Support\ServiceProvider;

class LombokServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/../config/lombok.php' => $this->app->configPath('lombok.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lombok.php', 'lombok');
    }
}
