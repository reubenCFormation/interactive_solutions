<?php
 require_once('header.php');

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>
        <div class="container bg-light">
            <?php if(isset($errorMsg)):?>
                <div class="alert alert-danger"> <?php echo $errorMsg ?> </div>
            <?php endif ?>
        <form method="post" action="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/signin" ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control" name="email"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">mot de passe</label>
                <input type="password" class="form-control" name="password"> 
            </div>
            
            <br/>

            <div class="d-flex justify-content-center">

                <button class="btn btn-primary w-25"> Connexion </button>
            </div>
        </form>

        </div>
        
    </body>
</html>