<?php

declare(strict_types=1);

namespace App\Adapter;

class BookReader
{
    public function readBook(BookInterface $book)
    {
        $book->open();

        $book->turnPage();

        // $book->close();
    }
}
