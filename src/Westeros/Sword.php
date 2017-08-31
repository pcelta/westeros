<?php

namespace Westeros;

class Sword
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $isValyrian;

    public function __construct(string $name, bool $isValyrian)
    {
        $this->name = $name;
        $this->isValyrian = $isValyrian;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isValyrian(): bool
    {
        return $this->isValyrian;
    }
}
