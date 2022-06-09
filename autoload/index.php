<?php

// require './classes/App/neww.php';

// $new = new App\neww();

// echo $new->var;


// Or, using an anonymous function
spl_autoload_register(
    function ($class) {
        require 'classes/' . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
    }
);


$new = new App\neww();

echo $new->var;

$mohamed = new App\Model\mohamed();

echo $mohamed->var;

$try_again = new App\Model\Again\TryAgain();

echo $try_again->var;
