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
            <h4 class="text-danger"> <?php echo $errorMsg ?> </h4>
        <?php endif ?>
            <form method="post" action="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/signup" ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">firstname</label>
                <input type="text" class="form-control" name="firstname"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">lastname</label>
                <input type="text" class="form-control" name="lastname"> 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email"> 
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                 <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                 <div class="text-center"> Decrivez vous </div>
                <textarea cols=50 rows=10 name="description"> </textarea>
             </div>
             <br/>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
             </div>
    
      
    </form>
</div>
    </body>
</html>