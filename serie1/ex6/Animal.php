<?php
require_once('./Connect.php');



// Maintenant que nous avons un peu vu l'heritage, nous pouvons potentiellement decouper notre classe Animal en plusiers partie differente. Dans un premier temps, nous pouvons constater que un Animal aura un nom et un numero de jambes,ainsi que un poids. Cependant, les animaux sont souvent classifier par leur type (phylum) (mammifiere, reptile etc.) Ainsi que par leur especes (Dog,Human etc.) Bien que trés simplifié, nous allons pouvoir voir comment decouper notre logique avec l'heritage!

class Animal{
    protected int $id;
    protected int $legs;
    protected int $weight;
    protected bool $isDomestic;
    protected string $species;
   
    protected string $name;
    // dans mon constructeur, je ne vais pas definir l'espece ou le type, ca sera dans ma classe! Je vais tout de meme devoir definir mes proprietés pour que elle soit reconnu dans la classe enfant!
    public function __construct($name,$legs,$weight,$id=null){
        // ici je ne defini que $name,$weight et $legs,et $isDomestic. Le reste ca sera a la classe enfant!
        $this->name=$name;
        $this->setWeight($weight);
        $this->setLegs($legs);

      
        if($id){
            $this->id=$id;
        }

       

       
    }

   
    // Ici je protege mon setter pour faire en sorte que nous pouvons pas mettre n'importe quoi. Nous devons soit choisir "Reptile" soit "Mammal". On aurai pu continuer a proteger ce code en mettant cette methode dans les classes enfants mais pour le moment ca suffira. Je mets également ma fonction en protected pour m'assurer que elle ne pourra pas étre appeler directement sur une Instance (meme si ce n'est pas strictement neccesaire de faire cela).

   public function insert(){
     try{
        $dbConnector=Connect::connectToDB();
        $sql="INSERT into animals(name,type,species,legs,weight,isDomestic) VALUES (?,?,?,?,?,?)";
        $statement=$dbConnector->prepare($sql);
        $statement->execute([$this->name,$this->type,$this->species,$this->legs,$this->weight,intval($this->isDomestic)]);
     }

     catch(PDOException $e){
        echo $e->getMessage();
     }
   }

/*
  public static function findAll($class){
     try{
        $dbConnector=Connect::connectToDB();
        $sql="SELECT * FROM animals WHERE type=?";
        $statement=$dbConnector->prepare($sql);
        $statement->execute([$class]);
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
     }

     catch(PDOException $e){
        echo $e->getMessage();
     }
  }
  */

 

    public function setWeight($weight){
        if($weight>500){
            throw new Exception("L'animal ne peux pas peser plus de 300 kg!");
        }
        $this->weight=$weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setLegs($legs){
        if($legs>10){
            throw new Exception("Un animal ne peux pas avoir plus de 10 jambes!");
        }

        $this->legs=$legs;
    }

    public function getLegs(){
        return $this->legs;
    }

    public function getName(){
        return $this->name;
    }


    public function getIsDomestic(){
       return $this->isDomestic;
    }

    public function setIsDomestic($isDomestic){
        $this->isDomestic=$isDomestic;
    }

    public function getSpecies(){
        return $this->species;
    }

    public function getId(){
        return $this->id;
    }

   

   // Les classes enfants (Mammal et Reptile) auront access a cette methode et ils pourront l'appeler. Ici $type et $species n'ont pas de valeur defini dans la classe parente mais étant donnée que c'est l'enfant qui va faire appel a la methode et que l'enfant va redefinir les valeurs, les valeurs seront definis
    public function describeAnimal(){
        if($this->isDomestic){
            return "Bonjour, je m'apelle"." ".$this->name." "."je pese"." ".$this->weight." "."kilos,je suis un animal du type"." ".$this->type." "."et J'appartiens a l'espece"." ".$this->species." "."J'ai aussi oublier de rajouter que j'ai"." ".$this->legs." "."jabmes et je suis domestiqué";
        }

        else{
            return "Bonjour, je m'apelle"." ".$this->name." "."je pese"." ".$this->weight." "."kilos,je suis un animal du type"." ".$this->type." "."et J'appartiens a l'espece"." ".$this->species." "."J'ai aussi oublier de rajouter que j'ai"." ".$this->legs." "." jabmes et je suis pas domestiqué!";
        }
        
    }

   

    

   
}








?>