<?php

namespace sohel40b\crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','crud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->publishes([
        //     __DIR__.'/public' => public_path('permission_dist'),
        // ], 'public');
    }

    public function register(){

    }
}
