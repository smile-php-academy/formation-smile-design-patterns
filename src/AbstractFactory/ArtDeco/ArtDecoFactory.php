<?php

declare(strict_types=1);

namespace App\AbstractFactory\ArtDeco;

use App\AbstractFactory\Contract\ChairInterface;
use App\AbstractFactory\Contract\FactoryInterface;
use App\AbstractFactory\Contract\TableInterface;

class ArtDecoFactory implements FactoryInterface
{
    public function makeChair(): ChairInterface
    {
        return new ArtDecoChair();
    }

    public function makeTable(): TableInterface
    {
        return new ArtDecoTable();
    }
}
