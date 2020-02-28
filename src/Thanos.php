<?php

namespace CollectionMacroThanos;

use Illuminate\Support\Collection;

class Thanos
{
    /** @var Collection */
    private $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function snap(): Collection
    {
        return $this->collection->random(ceil($this->collection->count() / 2));
    }
}
