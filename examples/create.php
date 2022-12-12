<?php
require __DIR__ . "/../vendor/autoload.php";
use Source\Models\User;
$user = new User();
// $user->id = '4';
//does not save, it may be that when creating the id, I created it in the database without being an autoincremet, it is to be verified and fixed
//update and delete is working
$user->first_name = "ragnar";
$user->last_name = "rock";
$user->genre = "M";
$user->save();
//var_dump($user);