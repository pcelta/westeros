<?php

namespace Tests\Unit\Westeros\Territory;

use Westeros\Territory\Factory as TerritoryFactory;

use PHPUnit\Framework\TestCase;
use Westeros\Family;
use Westeros\Person;
use Westeros\Sword;
use Westeros\Territory as TerritoryOfWesteros;

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

    public function testCreateShouldReturnWinterfellWhenTerritoryNameGivenIsWinterfell()
    {
        $family = new Family('Stark');
        $family->setSymbol('Wolf');

        $sword = new Sword('Long Claw', true);

        $jonSnow = new Person();
        $jonSnow->setFirstName('Jon');
        $jonSnow->setGender('male');
        $jonSnow->setSword($sword);
        $jonSnow->setFamily($family);

        $family->setLord($jonSnow);

        $expected = new TerritoryOfWesteros();
        $expected->setName('Winterfell');
        $expected->setCommonWeather('winter');
        $expected->setRuler($jonSnow);

        $result = TerritoryFactory::create(TerritoryFactory::WINTERFELL);
        $this->assertEquals($expected, $result);
    }
}
