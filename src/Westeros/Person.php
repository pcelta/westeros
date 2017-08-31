<?php

namespace Westeros;

class Person
{
    /**
     * @var Family
     */
    private $family;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var Sword
     */
    private $sword;

    public function getFamily(): Family
    {
        return $this->family;
    }

    public function setFamily(Family $family)
    {
        $this->family = $family;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function getSword(): Sword
    {
        return $this->sword;
    }

    public function setSword(Sword $sword)
    {
        $this->sword = $sword;
    }
}
