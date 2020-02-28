<?php

namespace CollectionMacroThanos\Tests\Unit;

use CollectionMacroThanos\Tests\TestCase;
use CollectionMacroThanos\Thanos;
use Illuminate\Support\Collection;

class ThanosTest extends TestCase
{
    public function testItCanBeConstructedWithACollection(): void
    {
        $this->assertInstanceOf(Thanos::class, new Thanos(collect()));
    }

    public function testItReturnsANewCollection(): void
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $snappedCollection = (new Thanos($collection))->snap();
        $this->assertInstanceOf(Collection::class, $snappedCollection);
        $this->assertNotSame($collection, $snappedCollection);
    }

    public function testItRemovesHalfOfTheItemsInTheCollection(): void
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertEquals(5, (new Thanos($collection))->snap()->count());
    }

    public function testItRoundsUpIfTheTotalIsUneven(): void
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]);
        $this->assertEquals(6, (new Thanos($collection))->snap()->count());
    }
}
