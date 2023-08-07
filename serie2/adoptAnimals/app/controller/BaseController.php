<?php 
namespace controller;
class BaseController{

    public function render($viewPath,$viewVars=[]){
        extract($viewVars);
        require_once($viewPath);
    }

    public function redirect($route){
        header('location:'.$route);
    }

}

?>