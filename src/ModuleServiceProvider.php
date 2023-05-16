<?php

namespace ARTBIRD\Module;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    { 
        $this->app->make('ARTBIRD\Module\InventoryController');                
        $this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR .'views','module');
        $this->loadMigrationsFrom(__DIR__ . DIRECTORY_SEPARATOR .'database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . DIRECTORY_SEPARATOR . 'routes.php';
    }
}
