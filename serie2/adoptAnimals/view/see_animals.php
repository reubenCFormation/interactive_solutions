<?php

require_once('header.php');



foreach($animals as $animal){
    echo '<pre>';
    var_dump($animal->getUser()->getEmail());
    echo "</pre>";
}


?>