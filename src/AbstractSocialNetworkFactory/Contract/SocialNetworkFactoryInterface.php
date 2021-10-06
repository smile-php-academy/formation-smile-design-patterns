<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory\Contract;

interface SocialNetworkFactoryInterface
{
    public function login(array $credentials): UserInterface;

    public function getProfile(UserInterface $user): ProfileInterface;
}
