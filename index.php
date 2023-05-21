<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require __DIR__ ."/vendor/autoload.php";
use Source\Support\Email;
use Source\Modules\Hg_api;
use Source\Crud\Crud;
use CoffeeCode\Router\Router;


/**
 * Send Email
 */
$email = new Email();
$email->add(
    "assunto do Email",
    "<h1> Corpo do email </h1>",
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

/**
* Api Request, Dollar Quotation
*/
$hg = new Hg_api(HG_API_KEY);
$dolar = $hg->dolar_quotation();
$dolar['buy'] = number_format($dolar['buy'], 2, '.', '');
?>
<p>
<h1> Dollar Quotation </h1>
<h2> <?php echo $dolar['buy']; ?> </h2>
</p>

<?php
/**
 * Crud
 */
$crud = new Crud();
echo $crud->addUser();
echo $crud->deleteUser(102);
//echo $crud->updateUser(6);
echo $crud->read();
?>


<?php
/**
 * Controllers MVC
 */
$router = new Router(URL_BASE);
/**
 * Controllers
 */
$router->namespace("Source\App");

/**
 * WEB
 * home
 */
$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}/{page}", "Web:home");

/**
 * WEB
 * blog
 */
$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}", "Web:post");
$router->get("/categoria", "Web:category");
$router->get("/categoria/{cat_uri}", "Web:category");

/**
 * WEB
 * contact
 */
$router->group("contato");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->delete("/", "Web:contact");
$router->get("/{sector}", "Web:contact");

/**
 * ADMIN
 * home
 */
$router->group("admin");
$router->get("/", "Admin:home");

/**
 * WEB
 * erros
 */
$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
?>
</body>
</html>

