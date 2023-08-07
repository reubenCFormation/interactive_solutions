<?php
 namespace controller;
 use controller\BaseController;
 use model\User;
 class UserController extends BaseController{

   
   public function renderSignUp(){
     $this->render('../view/signup.php');
   }

   public function signup(){
    
    if(!empty($_POST)){
        if($_POST["firstname"] && $_POST["lastname"] && $_POST["email"] && $_POST["password"] && $_POST["description"]){
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $email=$_POST["email"];
            $description=$_POST["description"];
            $passwordStr=$_POST["password"];

            $hash=password_hash($passwordStr,PASSWORD_BCRYPT);

            $newUser=new User($firstname,$lastname,$description,$email,$hash);

            if($newUser->signup()){
                $this->redirect(dirname($_SERVER["SCRIPT_NAME"]).'?successMsg=utilsateur ajouté!');
            }
        }
        

        else{
            $this->render('../view/signup.php',["errorMsg"=>"Veuillez remplir tous vos champs!"]);
        }
    }

    else{
        $this->render('../view/signup.php',["errorMsg"=>"Viullez remplir votre formulaire"]);
    }
   }

   public function renderSignIn(){
     $this->render("../view/signin.php");
   }

   public function signin(){
        if(!empty($_POST)){
            if($_POST["email"] && $_POST["password"]){
                $email=$_POST["email"];
                $passwordStr=$_POST["password"];
                $getUser=User::findByEmail($email);

                if($getUser){
                    $getIsUserVerified=password_verify($passwordStr,$getUser["password"]);

                    if($getIsUserVerified){
                        $_SESSION["user"]=$getUser;
                        $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                    }

                    else{
                        $this->render('../view/signin.php',["errorMsg"=>"Invalid Credentials!"]);
                    }
                }
            }
        }

        else{
            $this->render('../view/signup.php',["errorMsg"=>"Viullez remplir votre formulaire"]);
        }
   }

   public function logout(){
     session_destroy();
     $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
   }
   
    
 }

?>