<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory;

use App\AbstractSocialNetworkFactory\Contract\ProfileInterface;

class Profile implements ProfileInterface
{
    private string $name;
    private array $friends;

    public function __construct(string $name, array $friends)
    {
        $this->name = $name;
        $this->friends = $friends;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFriendsList(): array
    {
        return $this->friends;
    }
}
