<?php

declare(strict_types=1);

namespace App\Builder;

class Director
{
    private function buildModernHouse(BuilderInterface $builder)
    {
        $builder->reset();

        $builder
            ->rooms(2)
            ->doors(1)
            ->hasGarden()
        ;
    }

    public function makeModernHouse(HouseBuilder $builder): House
    {
        $this->buildModernHouse($builder);

        return $builder->getHouse();
    }

    public function makeModernManual(ManualBuilder $builder): Manual
    {
        $this->buildModernHouse($builder);

        return $builder->getManual();
    }

    public function makeSimpleHouse(HouseBuilder $builder): House
    {
        $builder->reset();

        $builder
            ->rooms(1)
            ->doors(1)
        ;

        return $builder->getHouse();
    }
}
