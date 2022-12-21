<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require __DIR__ ."/vendor/autoload.php";

use Source\Modules\Hg_api;

$email = new \Source\Support\Email();
$email->add(
    "assunto do Email",
    "<h1> Corpo do email tesye </h1>",
    "Daniela Costa",
    "xxx@gmail.com"
)->attach(
    "files/01.png",
    "figirl"
)->attach(
    "files/02.png",
    "pubcar"
)->send("Dani Smart", "xxxx@gmail.com");
if (!$email->error()) {
    var_dump(true);
} else {
    var_dump($email->error()->getMessage());
};
//its working, just set up config.json const MAIL

$hg = new Hg_api(HG_API_KEY);
$dolar = $hg->dolar_quotation();
$dolar['buy'] = number_format($dolar['buy'], 2, '.', '');
?>
<p>
<h1> Dollar Quotation </h1>
<h2> <?php echo $dolar['buy']; ?> </h2>
</p>

</body>
</html>

