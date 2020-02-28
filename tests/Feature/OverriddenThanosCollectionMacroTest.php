<?php

namespace CollectionMacroThanos\Tests\Feature;

use CollectionMacroThanos\ServiceProvider;
use CollectionMacroThanos\Tests\Fakes\FakeOverridingServiceProvider;
use CollectionMacroThanos\Tests\TestCase;
use Illuminate\Support\Collection;

class OverriddenThanosCollectionMacroTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FakeOverridingServiceProvider::class,
            ServiceProvider::class
        ];
    }

    public function testItDoesNotOverrideAnExistingCollectionMacro(): void
    {
        $this->assertEquals('this should override the thanos macro', collect([1, 2, 3])->thanos());
    }
}
