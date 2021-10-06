<?php

declare(strict_types=1);

namespace App\FactoryMethod;

class Facebook
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}
