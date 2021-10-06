<?php

declare(strict_types=1);

namespace App\FactoryMethod;

class FactoryMethod
{
    public static function make(string $type)
    {
        if ('type_2' === $type) {
            return new Type2();
        }

        if ('type_1' === $type) {
            return new Type3();
        }

        throw new \RuntimeException(sprintf('Type [%s] not supported!', $type));
    }
}
