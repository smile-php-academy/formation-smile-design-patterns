<?php

declare(strict_types=1);

namespace App\AbstractFactory\Contract;

interface FactoryInterface
{
    public function makeChair(): ChairInterface;

    public function makeTable(): TableInterface;
}
