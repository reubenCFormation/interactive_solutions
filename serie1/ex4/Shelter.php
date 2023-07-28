<?php
require_once("./Animal.php");
class Shelter{
    private string $name;
    private array $animals=[];
    private string $city;
    private int $maximum;
    private bool $acceptsWild=false;

    public function __construct($name,$city,$maximum){
        $this->name=$name;
        $this->city=$city;
        $this->maximum=$maximum;
    }

    public function setMaximum($maximum){
        $this->maximum=$maximum;
    }

    public function getMaximum(){
        return $this->maximum;
    }

    public function setAcceptsWild($acceptsWild){
        $this->acceptsWild=$acceptsWild;
    }

    public function getAcceptsWild(){
        return $this->acceptsWild;
    }

    public function setAnimals($animals){
        $this->animals=$animals;
    }

    public function addAnimal(Animal $animal){
        if(count($this->animals)< $this->maximum){
            if(!$this->acceptsWild){
                if(!$animal->getIsDomestic()){
                    throw new Exception("Pas d'animaux sauvage acceptés!");
                }

                else{
                    $this->animals[]=$animal;
                 
                }
               
            }

            else{
                $this->animals[]=$animal;
            }

           
        }

        else{
            echo "Pas suffisament de place restants!";
        }
    }

    public function getAnimals(){
        return $this->animals;
    }
}

$animal1=new Animal("Golden","mammal",60,4);
$animal2=new Animal("Rabu","mammal",30,4);
$animal3=new Animal("BugsBunny","mammal",20,4);

$wildAnimal1=new Animal("Crocman","reptile",150,4);
$wildAnimal2=new Animal("Hulk","monster",300,2);

$newShelter=new Shelter("myNewShelter","Bordeaux",10);

$newShelter->setAcceptsWild(true);

$newShelter->addAnimal($wildAnimal1);
$newShelter->addAnimal($wildAnimal2);
$newShelter->addAnimal($animal1);
$newShelter->addAnimal($animal2);
$newShelter->addAnimal($animal3);

$shelterAnimals=$newShelter->getAnimals();






?>