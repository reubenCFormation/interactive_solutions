<?php
 namespace controller;
 use controller\BaseController;
 class MainController extends BaseController{
    public function renderHome(){
       $this->render('../view/home.php');
    }
    
 }

?>