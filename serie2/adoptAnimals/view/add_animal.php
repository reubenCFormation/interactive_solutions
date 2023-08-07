<?php
 require_once("header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>
 <div class="container">
    <?php if(isset($errorMsg)):?>
           <div class="alert alert-danger">  <?php echo $errorMsg ?> </div>
    <?php endif ?>
        <form method="post" action="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/add_animal" ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" name="name"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Poids</label>
                <input type="number" class="form-control" name="weight"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Jambes</label>
                <input type="number" class="form-control" name="legs"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Especes</label>
                 <input type="text" class="form-control" name="species"> 
            </div>

            
            <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <select class="form-select" name="type">
                <option selected>Choisir votre type</option>
                <option value="Mammal">Mammifaire</option>
                <option value="Reptile">Reptile</option>
                
            </select>
            </div>
             <br/>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
             </div>
    
      
        </form>
</div>
    </body>
</html>