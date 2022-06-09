<?php

class Goodbye1
{
    public $name;
    public static $PI = 3.14159; // More common than CONST

    public static function byebye()
    {
        echo 'Hello World!';
    }

    public function get_byebye()
    {
        // $this->byebye();
        self::byebye();
    }
}

// $godbye = new Goodbye1();
// $godbye->get_byebye();

// Goodbye1::byebye();
echo Goodbye1::$PI;
