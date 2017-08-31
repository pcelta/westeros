<?php

namespace Westeros;

class Family
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Person
     */
    private $lord;

    /**
     * @var string
     */
    private $symbol;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLord(): Person
    {
        return $this->lord;
    }

    public function setLord(Person $lord)
    {
        $this->lord = $lord;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol)
    {
        $this->symbol = $symbol;
    }
}
