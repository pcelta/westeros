<?php

namespace Westeros;

use ArrayObject;
use InvalidArgumentException;
use ArrayIterator;

class TerritoryCollection extends ArrayObject
{
    public function __construct(array $territories = [])
    {
        if (!empty($territories)) {
            foreach ($territories as $territory) {
                $this->append($territory);
            }
        }

        parent::__construct($territories, 0, ArrayIterator::class);
    }

    public function append($territory)
    {
        if (!$territory instanceof Territory) {
            $message = sprintf('This Argument should be instance of %s', Territory::class);
            throw new InvalidArgumentException($message);
        }

        parent::append($territory);
    }
}
