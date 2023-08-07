<?php
 namespace model;
 use model\Connect;


 class User{
    private $id;
    private $firstname;
    private $lastname;
    private $description;
    private $email;
    private $password;

    public function __construct($firstname,$lastname,$description,$email,$password,$id=null){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->description=$description;
        $this->email=$email;
        $this->password=$password;

        if($id){
            $this->id=$id;
        }
    }

  

    public function setPassword($password){
        $this->password=$password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setFirstName($firstname){
        $this->firstname=$firstname;
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getId(){
        return $this->id;
    }

    public function signup(){
        try{
            $dbConnector=Connect::connectToDB();
            $sql="INSERT into users (firstname,lastname,email,password,description) VALUES (?,?,?,?,?)";
            $statement=$dbConnector->prepare($sql);
            
            $statement->execute([$this->firstname,$this->lastname,$this->email,$this->password,$this->description]);
            return true;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function findByEmail($email){
        try{
            $dbConnector=Connect::connectToDB();
            $sql="SELECT * FROM users WHERE email=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([$email]);
            $user=$statement->fetch(\PDO::FETCH_ASSOC);
            return $user;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }


    public static function findById($id){
        try{
            $dbConnector=Connect::connectToDB();
            $sql="SELECT * FROM users WHERE id=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([$id]);
            $user=$statement->fetch(\PDO::FETCH_ASSOC);
            return $user;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    /*
    public function signin(){
        try{
            $dbConnector=Connect::connectToDB();
            $sql="SELECT * FROM users WHERE email=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([]);
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
    */



   

  
 }


?>