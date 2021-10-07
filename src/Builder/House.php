<?php

declare(strict_types=1);

namespace App\Builder;

class House
{
    private int $windows = 0;
    private int $rooms = 0;
    private int $doors = 0;
    private bool $hasGarage = false;
    private bool $hasStatues = false;
    private bool $hasGarden = false;
    private bool $hasSwimingPool = false;

    public function getWindows(): int
    {
        return $this->windows;
    }

    public function setWindows(int $windows): void
    {
        $this->windows = $windows;
    }

    public function getRooms(): int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): void
    {
        $this->rooms = $rooms;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function isHasGarage(): bool
    {
        return $this->hasGarage;
    }

    public function setHasGarage(bool $hasGarage): void
    {
        $this->hasGarage = $hasGarage;
    }

    public function isHasStatues(): bool
    {
        return $this->hasStatues;
    }

    public function setHasStatues(bool $hasStatues): void
    {
        $this->hasStatues = $hasStatues;
    }

    public function isHasGarden(): bool
    {
        return $this->hasGarden;
    }

    public function setHasGarden(bool $hasGarden): void
    {
        $this->hasGarden = $hasGarden;
    }

    public function isHasSwimingPool(): bool
    {
        return $this->hasSwimingPool;
    }

    public function setHasSwimingPool(bool $hasSwimingPool): void
    {
        $this->hasSwimingPool = $hasSwimingPool;
    }
}
