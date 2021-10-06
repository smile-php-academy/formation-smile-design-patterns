<?php

declare(strict_types=1);

namespace App\AbstractSocialNetworkFactory\Facebook;

use App\AbstractSocialNetworkFactory\Contract\ProfileInterface;
use App\AbstractSocialNetworkFactory\Contract\SocialNetworkFactoryInterface;
use App\AbstractSocialNetworkFactory\Contract\UserInterface;
use App\AbstractSocialNetworkFactory\Profile;
use App\AbstractSocialNetworkFactory\User;

class FacebookFactory implements SocialNetworkFactoryInterface
{
    public function login(array $credentials): UserInterface
    {
        if (!isset($credentials['email'], $credentials['password'])) {
            throw new \InvalidArgumentException('invalid arguments');
        }

        echo 'Login Facebook with username : ' . $credentials['email'] . PHP_EOL;

        $name = 'Flan'; // response from facebook login action
        $age = 18;

        return new User(
            $name,
            $age,
            $credentials['email']
        );
    }

    public function getProfile(UserInterface $user): ProfileInterface
    {
        $friends = []; // request to facebook api .......

        return new Profile(
            $user->getName(),
            $friends,
        );
    }
}
