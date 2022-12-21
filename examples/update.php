<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = (new User())->findById(6);
$user->first_name = "Samwell";
$user->last_name = "Tarly";
$user->genre = "M";
$user->save();
//var_dump($user->data());
//update is working