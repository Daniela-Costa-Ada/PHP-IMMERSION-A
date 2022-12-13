<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = new User();
$user->first_name = "aria";
$user->last_name = "stark";
$user->genre = "F";
$user->save();
//var_dump($user);
//create is working