
<?php

require './../../models/model.php';

$db = new DB();

$users = $db->all('users');

$title = 'Users';
// var_dump($users);

require './../../views/users/index.php';
