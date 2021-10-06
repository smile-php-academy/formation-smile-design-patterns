<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\Contract\ChairInterface;
use App\AbstractFactory\Contract\FactoryInterface;
use App\AbstractFactory\Contract\TableInterface;

class FurnitureFactory
{
    private array $factories = [];

    public function make(string $type): FactoryInterface
    {
        if (!isset($this->factories[$type])) {
            throw new \RuntimeException(sprintf('Factory [%s] not supported!', $type));
        }

        return $this->factories[$type];
    }

    public function addFactory(string $alias, FactoryInterface $factory)
    {
        $this->factories[$alias] = $factory;
    }

    public function makeChair(string $factory): ChairInterface
    {
        return $this->make($factory)->makeChair();
    }

    public function makeTable(string $factory): TableInterface
    {
        return $this->make($factory)->makeTable();
    }
}
