<?php

namespace Westeros\Territory;

use Westeros\Family;
use Westeros\Person;
use Westeros\Sword;
use Westeros\Territory as TerritoryOfWesteros;
use InvalidArgumentException;

class Factory implements Factorable
{
    const WINTERFELL = 'winterfell';

    protected static $knownTerritories = [self::WINTERFELL];

    public static function create(string $territoryName): TerritoryOfWesteros
    {
        if (!in_array($territoryName, self::$knownTerritories)) {
            throw new InvalidArgumentException('Unknown Territory');
        }

        if ($territoryName === self::WINTERFELL) {
            return self::createWinterfell();
        }
    }

    protected static function createWinterfell(): TerritoryOfWesteros
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

        $territory = new TerritoryOfWesteros();
        $territory->setName('Winterfell');
        $territory->setCommonWeather('winter');
        $territory->setRuler($jonSnow);

        return $territory;
    }
}
