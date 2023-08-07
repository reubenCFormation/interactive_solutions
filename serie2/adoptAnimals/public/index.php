<?php
 session_start();
 require_once('../vendor/autoload.php');
 require_once('./register.php');

 $router=new AltoRouter();
 $baseUrl=dirname($_SERVER["SCRIPT_NAME"]);
 $router->setBasePath($baseUrl);

 $router->map("GET","/",["controller\MainController","renderHome"]);
 $router->map("GET","/signup",["controller\UserController","renderSignUp"]);
 $router->map("POST","/signup",["controller\UserController","signup"]);
 $router->map("GET","/signin",["controller\UserController","renderSignIn"]);
 $router->map("POST","/signin",["controller\UserController","signin"]);
 $router->map("GET","/logout",["controller\UserController","logout"]);
 $router->map("GET","/add_animal",["controller\AnimalController","renderAddAnimal"]);
 $router->map("POST","/add_animal",["controller\AnimalController","addAnimal"]);
 $router->map("GET","/see_animals",["controller\AnimalController","findAllAnimals"]);


 $getMatch=$router->match();

 if($getMatch){
    $controller=$getMatch["target"][0];
    $action=$getMatch["target"][1];

    $newController=new $controller();
    
    if($getMatch["params"]){

    }

    else{
        $newController->$action();
    }
 }


?>