<?php

namespace Naravichchan\FakePackage;

use Log;
use Illuminate\Support\ServiceProvider;

class SeagameServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        dd('It works!');
    }

    public function register()
    {
        $this->app->singleton(Seagame::class, function() {
            return new Seagame();
        });
    }
}
