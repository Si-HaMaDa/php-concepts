<?php

abstract class phone
{
    public $name;
    public $model;

    function open()
    {
        echo 'Open. ';
    }
}

trait touch
{
    public function touch()
    {
        echo 'Methods touch';
    }
}

trait faceDtection
{
    public function faceDtection()
    {
        echo 'Methods faceDtection';
    }
}

trait pen
{
    public function pen()
    {
        echo 'Methods pen';
    }
}

trait buttons
{
    public function buttons()
    {
        echo 'Methods buttons';
    }
}



class Iphone extends phone
{
    use touch, faceDtection;
}

// $iphone = new Iphone();
// $iphone->faceDtection();
// $iphone->touch();
// $iphone->pen();

class Samsung extends phone
{
    use touch, faceDtection, pen;
}

$samsung = new Samsung();
$samsung->pen();
var_dump($samsung);

class Nokia extends phone
{
    use buttons;
}
