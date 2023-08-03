<?php
spl_autoload_register(function ($class){
    // ici j'accede au namespace de la classe!
    
    echo "LA FONCTION SPL_AUTOLOAD SE DECLENCHE!";
    echo '<pre>';
    var_dump($class);
    echo '</pre>';
  

    $file=str_replace("\\","/",$class. '.php');
    echo "GET FILE! <br/>";
    var_dump($file);
    echo '<br/>';
    
    require_once("../app/".$file);
    
    
    
});


?>