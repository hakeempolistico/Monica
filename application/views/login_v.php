<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to StockOverflowing!</title>
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/login.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <table style="float: right" width="500">
    <tr>
        <td>
         <div class="modal-dialog">
         <!-- Trigger/Open The Modal --><center>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
         <!-- Trigger/Open The Modal -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Register</button>
        </center></td><td></td>
        </tr></table>
        <table>
        <tr>
        <td>
        <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center"> Welcome to StockOverflowing!</h1>
        </div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign in</h4>
        </div>
        <div class="modal-body">
             <div class="form-group">
                <form action="index.php/login_c/process" method="POST">
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
        </div>
   <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Account</h4>
        </div>
         <div class="modal-body">
             <div class="form-group">
             <form action="index.php/login_c/register_validation" method="POST">
             <label>Username:</label>
                   <input type="text" class="form-control input-md" placeholder="Enter Username" name="username" required/>
             </div>
             <label>Password:</label>
                   <input type="password" class="form-control input-md" placeholder="Enter Password" name="password" required/>
             
             <label>First Name:</label>
                 <input type="text" class="form-control input-md" placeholder="Enter First Name" name="firstname" required/>
             

             <label>Middle Name:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter Middle Name" name="mname" required/>
             </div>

             <label>Last Name:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter Last Name" name="lastname" required/>
             </div>

             <label>City Address:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter City Address" name="address" required/>
             </div>

             <label>Email Address:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="(e.g juantamad@yahoo.com)" name="e_address" required/>
             </div>

             <div class="form-group">
             <label>Gender:</label>
                 <select name="gender">
                    <option value="Male" name="gender" required="">Male</option>
                    <option value="Female" name="gender" required="">Female</option>
                 </select>
             </div>

             <label>Contact:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter Contact" name="contact" required/>
             </div>

             <label>Birthday:</label>
             <div class="form-group">
                 <input type="date" class="form-control input-md" placeholder="Enter Birthday" name="bday" required/>
             </div>


             <div class="form-group">
                 <input id="myModal" type="submit" class="btn btn-block btn-lg btn-primary" value="Sign up"/>
             </div>

              <center><span><a href="" data-dismiss="modal">Go back</a></span></center>
         </div>
         </div>
    </div>

    </div>
 </div>
 </body>
 </html>
