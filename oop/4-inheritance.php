<?php

class Car2
{
    public $name;
    public $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function intro()
    {
        echo "The Car1 is {$this->name} and the model is {$this->model}.<br>";
    }
}


$cerato = new Car2('Kia', 'cerato');
var_dump($cerato);

// $sportage = new Car2('Kia', 'sportage');
// $sportage->intro();

// $car = new Car2('Kia', 'cerato');
// $car->intro();
// var_dump($car);

echo '<br><br><br><br>';

class Kia extends Car2
{
    public $name = 'Kia';
    public $camera = 'Yes';

    public function __construct($model)
    {
        $this->model = $model;
    }
}


$certo = new Kia('cerato');
// $certo->intro();
var_dump($certo);
echo '<br><br><br><br>';
$sportage = new Kia('sportage');
// $sportage->intro();
var_dump($sportage);
echo '<br><br><br><br>';


class cerato extends Kia
{
    public $name = 'Kia';
    public $model = 'cerato';
    public $doors = '4';
    public $engine = '1.6';

    function __construct()
    {
    }
}

$certo2 = new cerato();
// $certo2->intro();
var_dump($certo2);
echo '<br><br><br><br>';
