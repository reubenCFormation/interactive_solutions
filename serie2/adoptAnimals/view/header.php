
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
      
    </head>

    <body>
    <div class="container bg-light">
        <header class="bg-info p-2">
            <?php if(isset($_SESSION["user"])):?>
                <div class="d-flex justify-content-around">
                    <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/add_animal" ?>" class="btn btn-primary"> Ajouter Un Animal </a>
                    <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/see_animals" ?>" class="btn btn-primary"> Voir les animaux </a>
                    <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"]).'/logout'?>" class="btn btn-primary"> Deconnexion </a>
                    
                </div>
                <?php else: ?>
                  <div class="d-flex justify-content-around">
                    <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/signup" ?>" class="btn btn-primary"> Inscription </a>
                    <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/signin"?>" class="btn btn-primary"> Connexion </a>
                </div>

                
                
            <?php endif ?>

            
        </header>
    </div>
    </body>
</html>