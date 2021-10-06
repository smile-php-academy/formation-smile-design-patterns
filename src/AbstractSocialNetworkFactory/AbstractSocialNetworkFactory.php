<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory;

use App\AbstractSocialNetworkFactory\Contract\SocialNetworkFactoryInterface;

class AbstractSocialNetworkFactory
{
    private array $factories = [];

    public function createSocialNetwork(string $socialNetwork): SocialNetworkFactoryInterface
    {
        if (!isset($this->factories[$socialNetwork])) {
            throw new \RuntimeException(sprintf('Network [%s] not supported!', $socialNetwork));
        }

        return $this->factories[$socialNetwork];
    }

    public function addSocialNetwork(string $alias, SocialNetworkFactoryInterface $socialNetwork)
    {
        $this->factories[$alias] = $socialNetwork;
    }
}
