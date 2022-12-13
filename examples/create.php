<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = new User();
$user->first_name = "jon";
$user->last_name = "snow";
$user->genre = "F";
$user->save();
//var_dump($user);
//create is working