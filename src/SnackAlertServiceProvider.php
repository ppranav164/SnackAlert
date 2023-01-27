<?php


namespace Pranav\SnackAlert;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Pranav\SnackAlert\View\Components\SnackAlertComponent;
use Pranav\SnackAlert\View\Components\SnackAlertStyles;

class SnackAlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/styles', 'snack-alert-animation');

        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'snack-alert');

        Blade::component('snack-alert-styles', SnackAlertStyles::class);
        Blade::component('snack-alert', SnackAlertComponent::class);
    }

    public function register()
    {
        $this->app->singleton('SnackAlert', function($app){
            return new SnackAlert;
        });
    }
}
