<?php

namespace Laragrounds;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laragrounds\View\Components\Backgrounds\DottedDark;
use Laragrounds\View\Components\Backgrounds\DottedLight;

class LaragroundsServiceProvider extends ServiceProvider
{
    /**
    | * bootstrap web service
    | * listen for events
    | * publish configs or database migrations
    | *
    | */
    public function boot()
    {
        //register components here
        $this->registerLaragroundsComponents();
    }


    /**
    | * extends functionality from other classes
    | * register service providers
    | * create singleton classes
    | *
    | */
    public function register()
    {
    }

    public function registerLaragroundsComponents()
    {
        Blade::component('dotted-light', DottedLight::class);
        Blade::component('dotted-dark', DottedDark::class);
    }
}
