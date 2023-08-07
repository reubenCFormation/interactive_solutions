<?php

spl_autoload_register(function ($class){
    // ici j'accede au namespace de la classe!
    $file=str_replace("\\","/",$class. '.php');
    
    require_once("../app/".$file);
    
});



?>