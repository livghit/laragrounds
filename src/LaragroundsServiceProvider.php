<?php

namespace Laragrounds;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laragrounds\View\Components\Backgrounds\BigGrid;
use Laragrounds\View\Components\Backgrounds\BigGridColored;
use Laragrounds\View\Components\Backgrounds\DottedDark;
use Laragrounds\View\Components\Backgrounds\DottedLight;
use Laragrounds\View\Components\Backgrounds\GridBlackWhite;
use Laragrounds\View\Components\Backgrounds\GridSimpleDark;
use Laragrounds\View\Components\Backgrounds\GridSimpleLight;
use Laragrounds\View\Components\Backgrounds\HalfGrid;
use Laragrounds\View\Components\Backgrounds\SideColor;

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
        Blade::component('grid-simple-light', GridSimpleLight::class);
        Blade::component('grid-simple-dark', GridSimpleDark::class);
        Blade::component('big-grid-colored', BigGridColored::class);
        Blade::component('big-grid', BigGrid::class);
        Blade::component('grid-black-white', GridBlackWhite::class);
        Blade::component('side-color', SideColor::class);
        Blade::component('half-grid', HalfGrid::class);
    }
}
