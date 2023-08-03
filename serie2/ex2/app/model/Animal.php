<?php
namespace model;

class Animal{

    public static function connect(){
        $host="localhost";
        // ma base de données
        $dbname="my_animals";
        // mon utilisateur (par defaut root)
        $username="root";
        // mon mot de passe (j'en precise pas). Plus tard, nous allons voir comment securiser notre mot de passe avec les variables d'environment
        $password="";
        
        $dbConnector=new \PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbConnector->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbConnector;
    }
    public static function findAll(){
        try{
            $dbConnector=self::connect();
            $sql="SELECT * FROM animals";
            $statement=$dbConnector->query($sql);
            $animals=$statement->fetchAll(\PDO::FETCH_ASSOC);
            return $animals;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }

    }

    public static function findById($id){
        try{
            $dbConnector=self::connect();
            $sql="SELECT * FROM animals WHERE id=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([$id]);
            $animal=$statement->fetch(\PDO::FETCH_ASSOC);
            return $animal;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}


?>