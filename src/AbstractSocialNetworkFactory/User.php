<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory;

use App\AbstractSocialNetworkFactory\Contract\UserInterface;

class User implements UserInterface
{
    private string $name;
    private int $age;
    private string $email;

    public function __construct(string $name, int $age, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
