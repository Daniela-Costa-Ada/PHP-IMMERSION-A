<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = (new User())->findById(3);
$user->first_name = "Deric";
$user->last_name = "costa";
$user->genre = "M";
$user->save();
//var_dump($user->data());
//update is working