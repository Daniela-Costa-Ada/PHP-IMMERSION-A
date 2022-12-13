<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = (new User())->findById(2);
$user->first_name = "Luiz";
$user->last_name = "XVI";
$user->genre = "F";
$user->save();
//var_dump($user->data());
//update is working