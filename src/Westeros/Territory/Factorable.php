<?php

namespace Westeros\Territory;

use Westeros\Territory;

interface Factorable
{
    public static function create(string $territoryName): Territory;
}
