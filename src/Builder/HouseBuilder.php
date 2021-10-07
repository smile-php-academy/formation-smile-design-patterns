<?php

declare(strict_types=1);

namespace App\Builder;

class HouseBuilder
{
    // private House $house;
    private array $parts = [];

    public function __construct(House $house = null)
    {
        // $this->house = $house ?: new House();
    }

    public function getHouse(): House
    {
        $house = new House();

        if (isset($this->parts['rooms'])) {
            $house->setRooms($this->parts['rooms']);
        }

        if (isset($this->parts['doors'])) {
            $house->setDoors($this->parts['doors']);
        }

        if (isset($this->parts['has_garden'])) {
            $house->setHasGarden($this->parts['has_garden']);
        }

        return $house;
    }

    public function rooms(int $rooms)
    {
        $this->parts['rooms'] = $rooms;
        // $this->house->setRooms($rooms);

        return $this;
    }

    public function doors(int $doors)
    {
        $this->parts['doors'] = $doors;
        // $this->house->setDoors($doors);

        return $this;
    }

    public function hasGarden(bool $hasGarden = true)
    {
        $this->parts['has_garden'] = $hasGarden;
        // $this->house->setHasGarden($hasGargen);

        return $this;
    }
}
