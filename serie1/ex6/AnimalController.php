<?php
  require_once('./Mammal.php');
  require_once('./Reptile.php');
 
  class AnimalController{
    public function getAllAnimals(){
        $getAllMammals=Mammal::findAllMammals();
        $getAllReptiles=Reptile::findAllReptiles();
        $getAllAnimals=array_merge($getAllMammals,$getAllReptiles);

        return $getAllAnimals;
    }
  }

  $newController=new AnimalController();

  $getAllAnimals=$newController->getAllAnimals();

  echo '<pre>';
  var_dump($getAllAnimals);
  echo '</pre>';

?>