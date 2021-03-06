<?php

namespace Zakhayko\Translator;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Zakhayko\Translator\Commands\TranslatorDelete;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config.php',
            'translator'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            TranslatorDelete::class,
        ]);
        $this->publishes([
            __DIR__.'/config.php' => config_path('translator.php'),
        ]);
    }
}
