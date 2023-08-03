<?php
 require_once('../vendor/autoload.php');
 
 require_once('./register.php');
 

 $router=new AltoRouter();

 $baseUrl=dirname($_SERVER["SCRIPT_NAME"]);
 $router->setBasePath($baseUrl);

 $router->map("GET","/see_animals",["controller\AnimalController","getAllAnimals"]);
 $router->map("GET","/see_animal/[i:value]",["controller\AnimalController","findAnimal"]);

 $getMatch=$router->match();

 if($getMatch){
    echo '<pre>';
    var_dump($getMatch);
    echo '</pre>';

    $controller=$getMatch["target"][0];
    $action=$getMatch["target"][1];
    $newController=new $controller();
    if($getMatch["params"]){
        $newController->$action($getMatch["params"]["value"]);

    }

    else{
        
        $newController->$action();
    }
    
 }



?>