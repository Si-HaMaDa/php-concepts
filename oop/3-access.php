<?php
class User
{
    public $name;
    protected $email;
    private $password;

    public function __construct($name, $email, $password, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = sha1($password);
        $this->phone = $phone;
    }

    public function set_password($val)
    {
        if (strlen($val) < 6 || strlen($val) > 10) {
            return 'false';
        } else {
            $this->password = sha1($val);
            return 'true';
        }
    }

    private function get_password()
    {
        return '*******';
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

$mango = new User('Nour', 'nour@mail.com', '123456', '0123456789');
$mango->name = 'Mango'; // OK
// $mango->email = 'Yellow@user.com'; // ERROR
// $mango->password = '300'; // ERROR

$mango->set_email('Yellow@user.com');
// echo $mango->get_email(); // ERORR
echo $mango->get_email_1();

echo $mango->name;
