<?php
require __DIR__ ."/vendor/autoload.php";
use Source\Support\Email;
$email = new Email();
$email->add(
    "email send from php code dani",
    "<h1> Email enviado pelo phpmailer usando e sendgrid </h1>",
    "Daniela Costa",
    "ra@gmail.com"
)->attach(
    "files/01.png",
    "figirl"
)->attach(
    "files/02.png",
    "pubcar"
)->send("Dani Smart", "a@gmail.com");
if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
};
//its  wonderfuly working
//echo "<h1> hello world, welcome </h1>";