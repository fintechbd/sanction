<?php

namespace Fintech\Sanction;

use Fintech\Sanction\Commands\InstallCommand;
use Fintech\Sanction\Commands\SanctionCommand;
use Illuminate\Support\ServiceProvider;

class SanctionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/sanction.php', 'fintech.sanction'
        );

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/sanction.php' => config_path('fintech/sanction.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'sanction');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/sanction'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sanction');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sanction'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                SanctionCommand::class,
            ]);
        }
    }
}
