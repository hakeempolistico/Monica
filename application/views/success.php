<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success!</title>
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <center>
         <p><h2>REGISTRATION SUCCESSFUL</h2></p></center>
        
        </div>
        <div class="modal-body">
        <center><h4 class="modal-title">You can now Sign in</h4></center><bR>
             <div class="form-group">
                <form action="process" method="POST">
                 <input type="text" class="form-control input-lg" placeholder="Username" name="username" required=""/>
             </div>

             <div class="form-group">
                 <input type="password" class="form-control input-lg" placeholder="Password" name="password" required="" />
             </div>

             <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                 
             </div>
        </form>
            </div>
            </div>
            </div>
           
 </body>
 </html>
