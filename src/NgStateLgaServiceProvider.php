<?php
namespace Favoriabs\Ngstatelga;
use Illuminate\Support\ServiceProvider;

class NgStateLgaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'ngstatelga');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // publish seeds
        $this->publishes([
        __DIR__ . '/seeds' => $this->app->databasePath() . '/seeds'
    ], 'seeds');
    $this->publishes([
    __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
], 'migrations');
      // publish views
      $this->publishes([
        __DIR__.'/views' => resource_path('views/ngstatelga'),
    ], 'views');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ngstatelga', function() {
            return new ngstatelga;
        });
    }
}
