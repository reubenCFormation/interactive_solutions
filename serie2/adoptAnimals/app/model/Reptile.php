<?php
namespace model;
use model\Animal;
class Reptile extends Animal{
    protected string $type;
    protected string $species;
    // je fais appel au parent
    public function __construct($species,$name,$legs,$weight,$userId,$id=null){
        // je defini que le $type de cette

        // ici l'enfant va definir $species et $type et via l'heritage il pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y herite!
        $this->setType("Reptile");
        // logiquement un espece va decouler d'un $type (Mammal ou Reptile, il serai donc aussi pertinent de definir $species ici)
        $this->species=$species;
        
        if($id){
            $this->id=$id;
        }

        
        
        parent::__construct($name,$legs,$weight,$userId);

        if($this->weight>100 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

       

    }

    public  function getType(){
        return $this->type;
    }

    public function setType($type){
        if($type!="Reptile"){
            throw new \Exception("Vous deviez preciser le type Reptile");
        }

        else{
            $this->type=$type;
        }
    }

    public function getSpecies(){
        return $this->species;
    }

  
   

}







?>