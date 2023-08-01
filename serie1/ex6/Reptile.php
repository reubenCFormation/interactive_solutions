<?php
require_once("./Animal.php");
class Reptile extends Animal{
    protected string $type;
   
    // je fais appel au parent
    public function __construct($species,$name,$legs,$weight,$id=null){
        // je defini que le $type de cette
        if($id){
            $this->id=$id;
        }
        // ici l'enfant va definir $species et $type et via l'heritage il pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y herite!
        $this->setType("Reptile");
        // logiquement un espece va decouler d'un $type (Mammal ou Reptile, il serai donc aussi pertinent de definir $species ici)
        $this->species=$species;
        
        parent::__construct($name,$legs,$weight);

        if($this->weight>100 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

       

    }
/*
    public static function findAll($class){
        $reptiles=parent::findAll($class);
        $reptilesObjArr=[];
        foreach($reptiles as $reptile){
            $reptilesObjArr[]=new Reptile($reptile["species"],$reptile["name"],$reptile["legs"],$reptile["weight"],$reptile["id"]);
        }

        return $reptilesObjArr;
    }
    */

    public static function findAllReptiles(){
        $dbConnector=Connect::connectToDB();
        $sql="SELECT * FROM animals WHERE type=?";
        $statement=$dbConnector->prepare($sql);
        $statement->execute([self::class]);
        $reptiles=$statement->fetchAll(PDO::FETCH_ASSOC);
        $reptilesObjArr=[];

        foreach($reptiles as $reptile){
            $reptilesObjArr[]=new Reptile($reptile["species"],$reptile["name"],$reptile["legs"],$reptile["weight"],$reptile["id"]);
        }

        return $reptilesObjArr;
    }

    public  function getType(){
        return $this->type;
    }

    public function setType($type){
        if($type!="Reptile"){
            throw new Exception("Vous deviez preciser le type Reptile");
        }

        else{
            $this->type=$type;
        }
    }

   

  
 


   
 
}









?>