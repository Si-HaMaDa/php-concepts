<?php

// use Classes\News\Again\Book as B;

// require './Book.php';

// echo '<br>';

// $book1 = new B();

// var_dump($book1);

// echo '<br>';

// $book2 = new B();

// var_dump($book2);

// echo '<br>';

// $book3 = new B();

// var_dump($book3);


// echo '<br>';

// $car = new Classes\News\Again\car();

// var_dump($car);


require './Morning/Good.php';

require './Night/Good.php';

use Morning\Good as GM;
use Night\Good as GN;

$good_morning = new GM();
echo $good_morning->good1();

echo '<br>';

$good_night = new GN();
echo $good_night->good1();