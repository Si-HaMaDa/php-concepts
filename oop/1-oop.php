<?php
///// PHP - Objects ////////////////////////////////////////////////////////////////
$car = (object) [
    'name' => 'Volvo',
    'Model' => 'ee',
    'move' => function () {
        return 'Moving...';
    }
];

$car1 = (object) [
    'name' => 'Me',
    'move' => function () {
        return 'Moving...';
    }
];

$car3 = (object) [
    'name' => 'BMW',
    'move' => function () {
        return 'Moving...';
    }
];

var_dump($car);

echo '<br>';

echo $car->name;

echo '<br>';

$result = $car->move;
var_dump($result());

echo '<hr>';

//// PHP OOP - Classes and Objects /////////////////////////////////////////////////
class Car
{
    public $name = 'BMW';
    public $model = 'ES';
    public $speed = 100;
    public $color = '';

    public function intro()
    {
        return "This car is $this->name and it's model is $this->model and it's speed is $this->speed";
    }

    public function move()
    {
        return 'Moving...';
        return $this->intro();
    }
}

$car1 = new Car();
$car1->model = 'NEW';
$car1->speed = 200;
var_dump($car1->intro());

echo '<br>';

$car2 = new Car();
var_dump($car2->intro());
echo '<br>';


