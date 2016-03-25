<?php

/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 18:59
 */

class BookSeed
{

    function run()
    {
        $book = new \App\Model\Book;
        $book->name = "Doors of Perception";
        $book->author = "Aldous Huxley";
        $book->save();
    }
}