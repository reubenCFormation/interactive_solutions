<?php
namespace controller;
use controller\BaseController;
use model\Animal;
use model\Mammal;
use model\Reptile;
use model\User;


class AnimalController extends BaseController{
    public function renderAddAnimal(){
        $this->render('../view/add_animal.php');
    }

    public function addAnimal(){
        if(!empty($_POST)){
            if($_POST["name"] && $_POST["species"] && $_POST["legs"] && $_POST["weight"] && $_POST["type"]){
                $name=$_POST["name"];
                $species=$_POST["species"];
                $legs=$_POST["legs"];
                $weight=$_POST["weight"];
                $type=$_POST["type"];

                if($type=="Mammal"){
                    $newMammal=new Mammal($species,$name,$legs,$weight,$_SESSION["user"]["id"]);
                    $newMammal->insert();
                    $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                }

                else if($type=="Reptile"){
                    $newReptile=new Reptile($species,$name,$legs,$weight,$_SESSION["user"]["id"]);
                    $newReptile->insert();
                    $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));

                }

                else{
                    $this->render("../view/add_animal.php",["errorMsg"=>"Vieullez preciser le bon type!"]);
                }
            }
        }

        else{
            $this->render('../view/add_animal.php',["errorMsg"=>"Vieullez remplir vos champs!"]);
        }
    }

    public function findAllAnimals(){
        $animals=Animal::findAll();

        $animalsObjArr=[];
        
        foreach($animals as $animal){
            if($animal["type"]=="Mammal"){
                $newMammal=new Mammal($animal["species"],$animal["name"],$animal["legs"],$animal["weight"],
                $animal["user_id"],$animal["id"]);
                $findUser=User::findByid($animal["user_id"]);
                $newUser=new User($findUser["firstname"],$findUser["lastname"],$findUser["description"],$findUser["email"],$findUser["password"],$findUser["id"]);
                $newMammal->setUser($newUser);

                $animalsObjArr[]=$newMammal;
            }

            if($animal["type"]=="Reptile"){
                $newReptile=new Reptile($animal["species"],$animal["name"],$animal["legs"],$animal["weight"],
                $animal["user_id"],$animal["id"]);
                $findUser=User::findByid($animal["user_id"]);
                $newUser=new User($findUser["firstname"],$findUser["lastname"],$findUser["description"],$findUser["email"],$findUser["password"],$findUser["id"]);
                $newReptile->setUser($newUser);

                $animalsObjArr[]=$newReptile;
            }
        }

        $this->render("../view/see_animals.php",["animals"=>$animalsObjArr]);
    }
}

?>