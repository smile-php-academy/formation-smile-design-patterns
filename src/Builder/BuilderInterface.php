<?php

namespace App\Builder;

interface BuilderInterface
{
    public function reset(): void;

    public function rooms(int $rooms): BuilderInterface;

    public function doors(int $doors): BuilderInterface;

    public function hasGarden(bool $hasGarden = true): BuilderInterface;
}
