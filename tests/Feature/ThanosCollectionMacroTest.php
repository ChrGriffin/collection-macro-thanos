<?php

namespace CollectionMacroThanos\Tests\Feature;

use CollectionMacroThanos\ServiceProvider;
use CollectionMacroThanos\Tests\TestCase;
use Illuminate\Support\Collection;

class ThanosCollectionMacroTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function testTheMacroIsAddedToLaravelCollections(): void
    {
        $this->assertInstanceOf(Collection::class, collect([1, 2, 3, 4, 5, 6, 7, 8, 9])->thanos());
    }
}
