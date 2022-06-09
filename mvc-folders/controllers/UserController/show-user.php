
<?php

require './../../models/model.php';

$db = new DB();

$id = (int)$_GET['id'];

$user = $db->first('users', $id);

$title = 'Show User';
// var_dump($user);

require './../views/users/show.php';
