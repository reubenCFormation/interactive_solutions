<?php
  require_once('./Mammal.php');
  require_once('./Reptile.php');
  class AnimalController{
    public static function mergeArr(){
        $mammalsObjArr=Mammal::findAllMammals();
        $reptilesObjArr=Reptile::findAllReptiles();

        return array_merge($mammalsObjArr,$reptilesObjArr);
    }
  }
  $getAllAnimals=AnimalController::mergeArr();

  echo '<pre>';
  var_dump($getAllAnimals);
  echo '</pre>';


?>