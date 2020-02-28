<?php

namespace CollectionMacroThanos\Tests\Fakes;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class FakeOverridingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Collection::macro('thanos', function () {
            return 'this should override the thanos macro';
        });
    }
}
