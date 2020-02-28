<?php

namespace CollectionMacroThanos;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        if(!Collection::hasMacro('thanos')) {
            Collection::macro('thanos', function () {
                return (new Thanos($this))->snap();
            });
        }
    }
}
