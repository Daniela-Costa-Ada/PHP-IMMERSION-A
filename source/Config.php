<?php

const URL_BASE = "http://localhost/php_tips";
const HG_API_KEY = 'find at site';
/*HOST SMTP
After configuring this data below, everything is ready to send emails
cpanel, faq, hosting support to consult these settings, mail client manual settings(ssl/tls)
you can use sendgrid-> setup guide -> smtp relay to setup your datas */
const MAIL = [
    "host" => "",
    "port" => "",
    "username" => "",
    "passwd" => "",
    "from_name" => "Daniela Costa",
    "from_email" => "xxxx@gmail.com"
];
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "4306",
    "dbname" => "ffo",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];
/*
to change the database, just change this connection
when using the Postgres database just use the connection below
const DATA_LAYER_CONFIG = [
    "driver" => "pgsql",
    "host" => "localhost",
    "port" => "5432",
    "dbname" => "datalayers",
    "username" => "postgres",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];
*/

/*
Server settings examplo
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'user@example.com';                     //SMTP username
$mail->Password   = 'secret';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
*/

