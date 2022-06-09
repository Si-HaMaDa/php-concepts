<?php

interface Car4
{
    public function __construct($name, $model);

    public function safty($var);

    public function intro();
}

// $kia = new Car4('Kia', 'Cerate');
// var_dump($kia);


class Kia implements Car4
{
    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function safty($var)
    {
        echo 'Try!';
    }

    public function intro()
    {
        echo "The Car is {$this->name} and the model is {$this->model}.";
    }
}

$kia = new Kia('Kia', 'Cerate');
var_dump($kia);
