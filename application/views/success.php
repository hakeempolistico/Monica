<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to StockOverflowing!</title>
        <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <header>
    <div class="header-inner">
      <img src="<?php echo base_url()?>images/bg.jpg" alt="img" width="1400px" height="708px">
      <div class="header-overlay">
        <div class="header-content">
        
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <center><font color="black">
         <p><h3>REGISTRATION SUCCESSFUL</h3></p></center>
        
        </div>
        <div class="modal-body">
        <center><h4 class="modal-title">You can now Sign in</h4></center></font><bR>
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
             <div class="form-group">
                 <center><span><a href="registermo">Register Another Account? Click here.</a></span></center>
                 
             </div>
             <div class="form-group">
                 <center><span><a href="balikmo">Back to Main Page</a></span></center>
                 
             </div>
        </form>
            </div>
            </div>
            </div>
    
  </header>
    </head>
 </html>
