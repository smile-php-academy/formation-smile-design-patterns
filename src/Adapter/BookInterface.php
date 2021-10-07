<?php

namespace App\Adapter;

interface BookInterface
{
    public function getPage(): int;

    public function open();

    public function turnPage();
}
