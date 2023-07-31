<?php

require_once('./Connect.php');

$dbConnector=Connect::connectToDB();
var_dump($dbConnector);

class Animal{
    private string $name;
    private int $legs;
    private int $weight;
    private string $type;
    private bool $isDomestic;
    private int $id;
    private static $count;
    

    public function __construct($name,$type,$weight,$legs,$id=null){

        if($id){
            $this->id=$id;
        }
        
        $this->name=$name;
        $this->type=$type;
        
        $this->setWeight($weight);
        $this->setLegs($legs);

        if($this->weight>100 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

    

    }

    public static function getAnimalCount(){
        $getAnimals=self::findAll();
        self::$count=count($getAnimals);
        return  self::$count;
    }

    public static function findAll(){
        try{
            $dbConnector=Connect::connectToDB();
            $sql="SELECT * FROM animals";
            $statement=$dbConnector->query($sql);
            $animals=$statement->fetchAll(PDO::FETCH_ASSOC);

            $animalsObjArr=[];

            foreach($animals as $animal){
                $animalsObjArr[]=new Animal($animal["name"],$animal["type"],$animal["weight"],$animal["legs"],$animal["id"]);
            }

            return $animalsObjArr;

        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function insert(){
        try{
            $dbConnector=Connect::connectToDB();

            $sql="INSERT into animals (name,type,legs,weight,isDomestic) VALUES(?,?,?,?,?)";

            $statement=$dbConnector->prepare($sql);

            $statement->execute([$this->name,$this->type,$this->legs,$this->weight,intval($this->isDomestic)]);
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function setLegs($legs){
        if($legs>10){
            throw new Exception("un animal ne peux pas avoir plus de 10 jambes!");
        }
        else{
            $this->legs=$legs;
        }
    }

    public function setWeight($weight){
        if($weight>500){
            throw new Exception("Un animal ne peux pas peser plus de 500 kilos!");
        }
        
        else{
            $this->weight=$weight;
        }
    }

    public function getLegs(){
        return $this->legs;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setIsDomestic($isDomestic){
        $this->isDomestic=$isDomestic;
    }

    public function getIsDomestic(){
       return $this->isDomestic;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getId(){
        return $this->id;
    }

    
}
/*
$newAnimal=new Animal("newAnimal","Mammal",80,2);
$newAnimal->insert();
*/

$wildAnimal=new Animal("wild","monster",200,5);
$wildAnimal->insert();

$domesticAnimal=new Animal("domestic","cat",30,4);
$domesticAnimal->insert();










?>