<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>
        <?php if(isset($_GET["successMsg"])):?>
            <?php echo $_GET["successMsg"] ?>
        <?php endif ?>
        <div class="container bg-light">
            <h4 class="text-center text-info"> 
                <?php if(isset($_GET["successMsg"])):?>
                    <h4 class="text-center text-success"> <?php echo $_GET["successMsg"] ?> </h4>
                <?php endif ?>
                Centre d'adoption d'animaux. Vieullez creer un compte pour consulter les animaux a adopter ainsi que de poster votre propre annonce!
            </h4>
        </div>
        
    </body>
</html>


<?php
 require_once('header.php');
?>

