<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory\Contract;

interface UserInterface
{
    public function getName(): string;

    public function getAge(): int;

    public function getEmail(): string;
}
