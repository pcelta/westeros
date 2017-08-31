<?php

namespace Westeros;

class Territory
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $commonWeather;

    /**
     * @var TerritoryCollection
     */
    protected $subTerritories;

    /**
     * @var Person
     */
    protected $ruler;

    public function __construct()
    {
        $this->subTerritories = new TerritoryCollection();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCommonWeather(): string
    {
        return $this->commonWeather;
    }

    public function getSubTerritories(): TerritoryCollection
    {
        return $this->subTerritories;
    }

    public function getRuler(): Person
    {
        return $this->ruler;
    }

    public function setRuler(Person $ruler)
    {
        $this->ruler = $ruler;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setCommonWeather(string $commonWeather)
    {
        $this->commonWeather = $commonWeather;
    }

    public function setSubTerritories(TerritoryCollection $subTerritories)
    {
        $this->subTerritories = $subTerritories;
    }
}
