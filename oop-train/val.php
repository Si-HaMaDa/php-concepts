<?php

define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");
define('DB_USER_NAME', "root");
define('DB_PASSWORD', "root");
define('DB_NAME', "php70");

require './Helpers/Validations.php';
require './Helpers/DB.php';

// use Helpers\DB;
// use Helpers\Validations;

echo '<pre>';


$nameCheck = new Validations('M.', 'notEmpty|isName|min:3|max:20|isIn:Mo,Mr,Mrs,Ms');
// $nameCheck = new Validations('M.');

var_dump($nameCheck);
// var_dump(
//     $nameCheck
//         ->notEmpty()
//         ->isName()
//         ->min(5)
//         ->max(20)
//         ->isIn(['Mo', 'Mr', 'Mrs', 'Ms'])
// );

// $nameCheck->notEmpty()->isIsset()->isName()->max(10);

// var_dump($nameCheck);



echo '<br>';

$passCheck = new Validations('123456');
$passCheck->notEmpty();
$passCheck->min(5);
$passCheck->max(20);
$passCheck->isFile();

var_dump($passCheck);


$db = new DB();

// var_dump($db);

// var_dump(
//     $db->connection->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC)
// );

// var_dump(
//     $db->all('users')
// );
// var_dump(
//     $db->first('users', 8)
// );
// var_dump(
//     $db->getWhere('users', [
//         // 'id' => 1,
//         'name' => 'Alyssa Gilmore',
//         // 'email' => 'xelybupe@mailinator.net'
//     ])
// );
// var_dump(
//     $db->getIdIn('users', [1, 3, 5, 8])
// );
// var_dump(
//     $db->insert('users', [
//         'name' => 'Harry Poter',
//         'email' => time() . '@mail.com',
//         'password' => sha1('123456'),
//         'age' => random_int(10, 99)
//     ])
// );
// var_dump(
//     $db->update(
//         'users',
//         [
//             'name' => 'Harry Poter',
//             'email' => time() . '@mail.com',
//             'password' => sha1('123456'),
//             'age' => random_int(10, 99),
//             'updated_at' => date('Y-m-d H:i:s')
//         ],
//         [
//             'id' => 11,
//             'name' => 'Harry Poter'
//         ]
//     )
// );
var_dump(
    $db->delete('users', 13)
);
