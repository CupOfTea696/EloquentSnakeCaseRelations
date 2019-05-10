<?php

namespace CupOfTea\SnakeCaseRelations;

use Illuminate\Contracts\Support\DeferrableProvider;
use CupOfTea\SnakeCaseRelations\Console\Commands\ModelMakeCommand;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('command.model.make', function ($cmd, $app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.model.make'];
    }
}
