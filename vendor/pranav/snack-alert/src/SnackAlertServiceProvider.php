<?php


namespace Pranav\SnackAlert;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Pranav\SnackAlert\View\Components\SnackAlertComponent;

class SnackAlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/styles', 'snack-alert-animation');

        Blade::directive('snackAlertStyles', function ($expression) {
            return (new SnackAlert())->styles();
        });

        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'snack-alert');

        Blade::component('snack-alert', SnackAlertComponent::class);
    }

    public function register()
    {
        $this->app->singleton('SnackAlert', function($app){
            return new SnackAlert;
        });
    }
}
