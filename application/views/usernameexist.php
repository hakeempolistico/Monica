<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/login.css" rel="stylesheet">
    </head>
    <body>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Register Account</h1>
        </div>
         <div class="modal-body">
            <p class="text-warning"><small>Username already existing.</small></p>
             <div class="form-group">
             <form action="register_validation" method="POST">
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
                 <input type="text" class="form-control input-md" placeholder="Enter Email Address" name="e_address" required/>
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

             <div class="form-group">
                <a href="balikmo" class="btn btn-block btn-lg btn-primary" value="Go Back">
             </div>
         </div></div>
    </div></div>
 </div>
 </body>
 </html>
