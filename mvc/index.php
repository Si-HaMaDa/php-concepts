
<?php

require './model.php';

$db = new DB();

$users = $db->all('users');

$title = 'Users';
// var_dump($users);

require './view.php';
