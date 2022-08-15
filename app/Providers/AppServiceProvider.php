<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Builder::macro('search', function ($field, $string){
            return $string ? $this->where($field,'like','%'.$string.'%'):$this;
        });

        Filament::serving(function () {
            Filament::registerTheme(mix('css/app.css'));
        });
    }
}
