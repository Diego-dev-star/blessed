<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use Larapack\Hooks\Hooks;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        $this->app->resolving(Hooks::class, function ($api, $app) {
            $this->app[Hooks::class]::setRemote('http://satisfy.xiaoqiezi.top');
            $this->app[Hooks::class]->readJsonFile();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //Глобальные переменные
        View::share('newsblock', \App\Models\News::orderBy('created_at','desc')->get());
        View::share('brecrumbs',  \App\Models\brecrumb::all('image'));
        View::share('categories',  \TCG\Voyager\Models\Category::all());
    }
}
