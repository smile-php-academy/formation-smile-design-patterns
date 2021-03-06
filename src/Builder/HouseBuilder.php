<?php

declare(strict_types=1);

namespace App\Builder;

class HouseBuilder implements BuilderInterface
{
    private House $house;

    public function __construct()
    {
        $this->reset();
    }

    public function getHouse(): House
    {
        $house = $this->house;

        $this->reset();

        return $house;
    }

    public function reset(): void
    {
        $this->house = new House();
    }

    public function rooms(int $rooms): BuilderInterface
    {
        $this->house->setRooms($rooms);

        return $this;
    }

    public function doors(int $doors): BuilderInterface
    {
        $this->house->setDoors($doors);

        return $this;
    }

    public function hasGarden(bool $hasGarden = true): BuilderInterface
    {
        $this->house->setHasGarden($hasGarden);

        return $this;
    }
}
