<?php
require_once("./Animal.php");

class Mammal extends Animal{
   protected  string $type;
   
 
    
    public function __construct($species,$name,$legs,$weight,$id){
        // ici l'enfant va definir $species et $type et via l'heritage il y aura access et pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y hérite
        if($id){
            $this->id=$id;
        }
        $this->setType("Mammal");
        // logiquement un espece va decouler d'un $type (Mammal ou Reptile, il serai donc aussi pertinent de definir $species ici)
        $this->species=$species;

        
        
        
        // je fais appel au constructeur du parent en passant les parametres
        parent::__construct($name,$legs,$weight);

        if($this->weight>200 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

       

       
    }
 /*
    public static function findAll($class){
        $mammals=parent::findAll($class);
        $mammalsObjArr=[];
        foreach($mammals as $mammal){
            $mammalsObjArr[]=new Mammal($mammal["species"],$mammal["name"],$mammal["legs"],$mammal["weight"],$mammal["id"]);
        }

        return $mammalsObjArr;
    }
    */

    public static function findAllMammals(){
        $dbConnector=Connect::connectToDB();
        $sql="SELECT * FROM animals WHERE type=?";
        $statement=$dbConnector->prepare($sql);
        $statement->execute([self::class]);
        $mammals=$statement->fetchAll(PDO::FETCH_ASSOC);
        $mammalsObjArr=[];

        foreach($mammals as $mammal){
            $mammalsObjArr[]=new Mammal($mammal["species"],$mammal["name"],$mammal["legs"],$mammal["weight"],$mammal["id"]);
        }

        return $mammalsObjArr;


    }
    // ici etant donnée que nous allons definir notre proprieté $type dans l'enfant, je vais logiquement mettre mon setter pour la proprieté $type dans l'enfant. Etant donnée que 

    public function setType($type){
        if($type!="Mammal"){
            throw new Exception("Vous deviez preciser le type Mammal");
        }

        else{
            $this->type=$type;
        }
    }


 

    public  function getType(){
        return $this->type;
    }



    
   // ici je dois surcharger $type. Sinon, $type ne sera que defini dans le parent et l'enfant prendra la derniere valeur defini dans le parent étant donnée que la proprieté est statique, il n'y a que une valeur a un moment donnée. Si je ne redefini pas $type dans l'enfant, par defaut il prendra la derniere valeur de $type dans le parent meme si la derniere valeur aurai éetait Reptile par exemple.
   


    /*
    Ici comme nous pouvons le constater, nous avons access aux proprietés $weight,$name et $legs meme si elles ne son pas defini dans cette classe grace a l'heritage!

    */
  

    
 
}

















?>