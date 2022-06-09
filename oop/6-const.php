<?php

// define('NAME', 'Mohamed');
// echo NAME;

class Goodbye
{
    public $name = 'Mohamed';
    const LEAVING_MESSAGE = "Thank you for visiting php70.test!";

    public function byebye()
    {
        echo $this->name . '<br>';
        echo self::LEAVING_MESSAGE;
    }
}

$greating = new Goodbye();
// $greating->name = "Hello";
// echo $greating->name . '<br>';
// $greating::LEAVING_MESSAGE = 'New Message';
// echo $greating::LEAVING_MESSAGE;
echo $greating->byebye();

// echo Goodbye->$name; // ERORR
// echo Goodbye::LEAVING_MESSAGE;



$greating1 = new Goodbye();
$greating2 = new Goodbye();
$greating3 = new Goodbye();