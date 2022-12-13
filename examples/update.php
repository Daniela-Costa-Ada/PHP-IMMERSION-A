<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = (new User())->findById(9);
$user->first_name = "tirion";
$user->last_name = "lannister";
$user->genre = "M";
$user->save();
//var_dump($user->data());
//update is working