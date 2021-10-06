<?php

declare(strict_types=1);

namespace App\AbstractFactory\Modern;

use App\AbstractFactory\Contract\ChairInterface;
use App\AbstractFactory\Contract\FactoryInterface;
use App\AbstractFactory\Contract\TableInterface;

class ModernFactory implements FactoryInterface
{
    public function makeChair(): ChairInterface
    {
        return new ModernChair();
    }

    public function makeTable(): TableInterface
    {
        return new ModernTable();
    }
}
