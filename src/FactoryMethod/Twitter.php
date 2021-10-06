<?php

declare(strict_types=1);

namespace App\FactoryMethod;

class Twitter
{
    private string $username;
    private string $password;

    public function __constructs(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
