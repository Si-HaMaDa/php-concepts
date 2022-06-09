<?php

abstract class Car3
{
    public $name;
    public $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    abstract public function operate();

    abstract public function doors($num);

    public function intro()
    {
        echo "The Car is {$this->name} and the model is {$this->model}.";
    }
}

// $car = new Car3('Kia', 'cerato'); // ERROR
// // $car->intro();
// var_dump($car);

class Kia extends Car3
{
    public function operate()
    {
        echo 'Key!';
    }

    public function doors($num)
    {
        $this->door = $num;
    }
}

$kia = new Kia('Kia', 'cerato');
$kia->doors(4);
var_dump($kia);

class BMW extends Car3
{
    public function operate()
    {
        echo 'Key!';
    }

    public function doors($num)
    {
        $this->door = $num;
    }
}
