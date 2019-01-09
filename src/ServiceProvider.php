<?php
/**
 * Created by PhpStorm.
 * User: Buğra Güney
 * Date: 2019-01-09
 * Time: 12:42
 */

namespace bugraguney\laraveldocker;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use bugraguney\laraveldocker\Commands\InstallDocker;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/docker' => base_path(),
        ], 'docker');
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallDocker::class,
            ]);
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}