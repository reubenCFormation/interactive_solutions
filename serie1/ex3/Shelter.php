<?php
require_once('../ex2/Animal.php');
class Shelter{
    public string $name;
    public array $animals=[];
    public string $city;
    public int $maximum;
    public bool $acceptsWild=false;

    public function __construct($name,$city,$maximum){
        $this->name=$name;
        $this->city=$city;
        $this->maximum=$maximum;
    }

    public function addAnimal(Animal $animal){
        if(count($this->animals)< $this->maximum){
            if(!$this->acceptsWild){
                if(!$animal->isDomestic){
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

    public function showAnimalInfo(){
        foreach($this->animals as $animal){
            echo "nom:"." ".$animal->name.'<br/>';
            echo "poids:"." ".$animal->weight."<br/>";
            echo "type:"." ".$animal->type."<br/>";
            echo '<br/>';
        }
    }
}

$animal1=new Animal("myCat","mammal",20,4);
$animal2=new Animal("myDog","mammal",60,4);
$animal3=new Animal("anotherDog","mammal",70,4);
$wildAnimal1=new Animal("Croc","reptile",250,4);
$wildAnimal2=new Animal("Shrek","ogre",250,2);

$myShelter=new Shelter("myShelter","Paris",2);
/*
$myShelter->addAnimal($animal1);
$myShelter->addAnimal($animal2);
*/

$myShelter->acceptsWild=true;
$myShelter->maximum=10;

$myShelter->addAnimal($wildAnimal1);
$myShelter->addAnimal($wildAnimal2);
$myShelter->addAnimal($animal1);
$myShelter->addAnimal($animal2);
$myShelter->addAnimal($animal3);

$myShelter->showAnimalInfo();



?>