<?php

namespace CollectionMacroThanos;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        Collection::macro('thanos', function () {
            return $this;
        });
    }
}
