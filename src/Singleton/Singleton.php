<?php

declare(strict_types=1);

namespace App\Singleton;

class Singleton
{
    private static $instance;

    private function __construct() { }
    private function __clone() { }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
