<?php

///// PHP OOP Constructor - Destructor /////////////////////////////////////////////
class Car1
{
    public $name;
    public $model;
    public $speed;
    public $color;

    public function __construct($n, $m, $s, $c)
    {
        // echo 'Construct';
        $this->name = $n;
        $this->model = $m;
        $this->speed = $s;
        $this->color = $c;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    public function intro()
    {
        echo 'Intro';
        return "This car is $this->name and it's model is $this->model and it's speed is $this->speed";
    }

    public function move()
    {
        echo 'Move';
        return 'Moving...';
        return $this->intro();
    }

    public function __destruct()
    {
        echo "The Car is {$this->name} and the color is {$this->color}.<br>";
    }
}

$bmw = new Car1('BMW', 'ES', 100, 'Red');
// $bmw->name = 'BMW';
// $bmw->set_name('BMW');
// $bmw->model = 'ES';

// echo $bmw->intro();
var_dump($bmw);

echo '<br>';

$volvo = new Car1('Volvo', 'E1', 100, 'White');

var_dump($volvo);

echo '<hr>';
