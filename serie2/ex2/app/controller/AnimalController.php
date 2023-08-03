<?php
namespace controller;
use model\Animal;

class AnimalController{
   public function getAllAnimals(){
      $animals=Animal::findAll();
      echo '<pre>';
      var_dump($animals);
      echo '</pre>';
   }

   public function findAnimal($id){
      $animal=Animal::findById($id);
      echo '<pre>';
      var_dump($animal);
      echo '</pre>';
   }
}




?>