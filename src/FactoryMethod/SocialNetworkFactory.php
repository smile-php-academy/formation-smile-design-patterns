<?php

declare(strict_types=1);

namespace App\FactoryMethod;

class SocialNetworkFactory
{
    public static function make(string $type)
    {
        if ('facebook' === $type) {
            return new Facebook('d446+4zad4za6');
        }

        if ('twitter' === $type) {
            return new Twitter('yoeunes', '44646');
        }

        throw new \RuntimeException(sprintf('Type [%s] not supported!', $type));
    }
}
