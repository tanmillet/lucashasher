<?php

namespace TerryLucas2017\Hasher;

use Illuminate\Support\ServiceProvider;

class LucasMD5Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
            'lucasmd5',
            function () {

                return new LucasMD5();
            }
        );
    }
}
