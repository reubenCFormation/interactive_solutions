<?php
class AnimalController{
    public static function connect(){
        $host="localhost";
        // ma base de données
        $dbname="my_animals";
        // mon utilisateur (par defaut root)
        $username="root";
        // mon mot de passe (j'en precise pas). Plus tard, nous allons voir comment securiser notre mot de passe avec les variables d'environment
        $password="";
        
        $dbConnector=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbConnector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnector;
    }

    public function getAllAnimals(){
        try{
            $sql="SELECT * FROM animals";
            $dbConnector=self::connect();
            $statement=$dbConnector->query($sql);
            $animals=$statement->fetchAll(PDO::FETCH_ASSOC);
            
            echo '<pre>';
            var_dump($animals);
            echo '</pre>';
            
            /*
            Bonus!
            return $animals;
            */
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function findAnimalById($id){
        try{
            $dbConnector=self::connect();
            $sql="SELECT * FROM animals WHERE id=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([$id]);
            $findAnimal=$statement->fetch(PDO::FETCH_ASSOC);

            echo '<pre>';
            var_dump($findAnimal);
            echo '</pre>';
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}


?>