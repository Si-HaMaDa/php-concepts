<?php

// require './classes/App/neww.php';

// $new = new App\neww();

// echo $new->var;


// Or, using an anonymous function
spl_autoload_register(
    function ($class) {
        // var_dump('From spl autoload');

        // var_dump($class);

        // var_dump('classes/' . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php');
        // die;

        require 'classes' . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
    }
);


$new = new App\neww();

echo $new->var;

$mohamed = new App\Model\mohamed();

echo $mohamed->var;

$try_again = new App\Model\Again\TryAgain();

echo $try_again->var;


echo '<br>Hello World!';
