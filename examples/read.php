<?php
require __DIR__ . "/../vendor/autoload.php";
use CoffeeCode\DataLayer\Connect;
use Source\Models\User;
$user = new User();
$list = $user->find()->fetch(true);
/** @var  $userItem User */
foreach ($list as $userItem) {
    var_dump($userItem->data()->first_name);
    var_dump($userItem->data());
    foreach ($userItem->addresses() as $address) {
        var_dump($address->data());
    }
}