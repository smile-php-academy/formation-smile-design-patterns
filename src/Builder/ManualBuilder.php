<?php

declare(strict_types=1);

namespace App\Builder;


class ManualBuilder implements BuilderInterface
{
    private $parts = [];

    public function getManual(): Manual
    {
        $manual = new Manual(implode(PHP_EOL, $this->parts));

        $this->reset();

        return $manual;
    }

    public function reset(): void
    {
        $this->parts = [];
    }

    public function rooms(int $rooms): BuilderInterface
    {
        $this->parts[] = "Has $rooms rooms";

        return $this;
    }

    public function doors(int $doors): BuilderInterface
    {
        $this->parts[] = "Has $doors doors";

        return $this;
    }

    public function hasGarden(bool $hasGarden = true): BuilderInterface
    {
        $this->parts[] = $hasGarden ? "Has garden" : "Does not have garden";

        return $this;
    }
}
