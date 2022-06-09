<?php

class User
{
    public $name;
    public $phone;
    protected $email = 'mail@gmail.com';
    private $password = '123456';

    public function __construct($name, $email, $password, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }

    public function set_password($val)
    {
        if (strlen($val) < 6 || strlen($val) > 10) {
            return 'false';
        } else {
            $this->password = $val;
            return 'true';
        }
    }

    public function get_password()
    {
        return substr($this->password, 0, 3);
    }

    function set_email($email)
    {
        // Check if user logged in
        // if (logged) {
        //     $this->email = $email;
        // } else {
        //     return 'Error';
        // }
        $this->email = $email;
    }

    protected function get_email()
    {
        // Check if user logged in
        // if (logged) {
        //     return $this->email;
        // } else {
        //     return substr($this->email, 0, 3);
        // }
        return substr($this->email, 0, 3);
    }

    function get_email_1()
    {
        return $this->get_email();
    }


    public function get_phone()
    {
        return substr($this->phone, -3, 3);
    }
}

class Client extends User
{
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function get_mail()
    {
        return $this->email;
    }

    public function get_pass()
    {
        return $this->password;
    }
}


$client = new Client('John', '0123456789');
echo $client->name . '<br>';
// echo $client->email . '<br>'; // Error
echo $client->get_mail() . '<br>';
// echo $client->password . '<br>'; // Error
// echo $client->get_pass() . '<br>'; // Error
var_dump($client);

// echo $client->password;
