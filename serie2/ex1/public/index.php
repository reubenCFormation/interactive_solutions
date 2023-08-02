<?php
 require_once('../vendor/autoload.php');
 require_once('../controller/AnimalController.php');

 $router=new AltoRouter();

 echo '<pre>';
 var_dump($_SERVER["SCRIPT_NAME"]);
 echo '</pre>';

 $baseUrl=dirname($_SERVER["SCRIPT_NAME"]);

 $router->setBasePath($baseUrl);

 $router->map("GET","/all_animals",["AnimalController","getAllAnimals"],"allAnimalsRoute");
 $router->map("GET","/find_animal/[i:value]",["AnimalController","findAnimalById"],"findAnimalRoute");

 $getMatch=$router->match();

 if($getMatch){
    echo '<pre>';
    var_dump($getMatch);
    echo '</pre>';

    $controller=$getMatch["target"][0];
    $action=$getMatch["target"][1];
    if($getMatch["params"]){
        $newController=new $controller();
        $newController->$action($getMatch["params"]["value"]);
    }

    else{
        $newController=new $controller();
        // Bonus!
        /*
        $allAnimals=$newController->$action();
        */

        $newController->$action();
    }
   
    
    
 }

?>

<!-- Bonus! -->
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>
        <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/all_animals" ?>" class="btn btn-primary"> Voir tous les animaux! </a>

        <?php if(isset($allAnimals)):?>
            <table class="table table-bordered">
                <thead>
                    <th> Nom </th>
                    <th> Type </th>
                    <th> Especes </th>
                    <th> Details </th>
                </thead>
            <?php foreach($allAnimals as $animal):?>
               
                    <tr>
                        <td> <?php echo $animal["name"] ?> </td>
                        <td> <?php echo $animal["type"] ?> </td>
                        <td> <?php echo $animal["species"] ?> </td>
                        <td> <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/find_animal/".$animal["id"] ?>" class="btn btn-primary"> Voir Details </a> </td>
                    </tr>
              

            <?php endforeach ?>

            </table>
        <?php endif ?>
    </body>
</html>