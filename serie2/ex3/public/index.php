<?php
require_once('../vendor/autoload.php');
require_once('./register.php');

$router=new AltoRouter();

$baseUrl=dirname($_SERVER["SCRIPT_NAME"]);

$router->setBasePath($baseUrl);



?>