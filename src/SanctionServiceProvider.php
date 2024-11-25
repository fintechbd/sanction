<?php

namespace Fintech\Sanction;

use Fintech\Core\Traits\Packages\RegisterPackageTrait;
use Fintech\Sanction\Providers\RepositoryServiceProvider;
use Illuminate\Support\ServiceProvider;
use packages\Sanction\src\Commands\InstallCommand;

class SanctionServiceProvider extends ServiceProvider
{
    use RegisterPackageTrait;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->packageCode = 'sanction';

        $this->mergeConfigFrom(
            __DIR__.'/../config/sanction.php', 'fintech.sanction'
        );

        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->injectOnConfig();

        $this->publishes([
            __DIR__.'/../config/sanction.php' => config_path('fintech/sanction.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'sanction');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/sanction'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sanction');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sanction'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
