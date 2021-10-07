<?php

declare(strict_types=1);

namespace App\Adapter;

class EbookAdapter implements BookInterface
{
    private Ebook $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function getPage(): int
    {
        return $this->ebook->getPage();
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }
}
