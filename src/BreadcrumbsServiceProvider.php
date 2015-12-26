<?php
namespace KjmTrue\Breadcrumbs;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
//    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumbs', function ($app) {
            $breadcrumbs = new Breadcrumbs();

            return $breadcrumbs;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['breadcrumbs'];
    }
}
