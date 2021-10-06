<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory\Contract;

interface ProfileInterface
{
    public function getName(): string;

    public function getFriendsList(): array;
}
