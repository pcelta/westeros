<?php

namespace Tests\Unit\Westeros\Territory;

use Westeros\Territory\Factory as TerritoryFactory;

use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unknown Territory
     */
    public function testCreateShouldThrowInvalidArgumentExceptionWhenTerritoryIsUnknown()
    {
        $unknownTerritory = 'Sydney';
        TerritoryFactory::create($unknownTerritory);
    }
}
