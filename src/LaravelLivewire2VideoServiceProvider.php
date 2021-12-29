<?php

namespace GMJ\LaravelLivewire2Video;

use GMJ\LaravelLivewire2Video\Http\Livewire\Backend;
use GMJ\LaravelLivewire2Video\View\Components\Frontend;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire;

class LaravelLivewire2VideoServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php", 'LaravelLivewire2Video');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'LaravelLivewire2Video');

        Blade::component("LaravelLivewire2Video", Frontend::class);
        Livewire::component("LaravelLivewire2VideoLivewire", Backend::class);

        $this->publishes([
            __DIR__ . '/database/seeders' => database_path('seeders'),
        ], 'GMJ\LaravelLivewire2Video');
    }


    public function register()
    {
    }
}
