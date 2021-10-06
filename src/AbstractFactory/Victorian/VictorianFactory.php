<?php

declare(strict_types=1);

namespace App\AbstractFactory\Victorian;

use App\AbstractFactory\Contract\ChairInterface;
use App\AbstractFactory\Contract\FactoryInterface;
use App\AbstractFactory\Contract\TableInterface;

class VictorianFactory implements FactoryInterface
{
    public function makeChair(): ChairInterface
    {
        return new VictorianChair();
    }

    public function makeTable(): TableInterface
    {
        return new VictorianTable();
    }
}
