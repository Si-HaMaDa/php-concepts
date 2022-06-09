<?php

namespace Classes\News\Again;

// namespace newname;

class Book
{

    public function hello()
    {
        return 'Hello Form Book!';
    }
}

class car
{

    public function hello()
    {
        return 'Hello Form Car!';
    }
}


$book = new Book();

var_dump($book);

echo '<br>';

$car = new car();

var_dump($car);