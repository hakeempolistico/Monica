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
    <link href="<?php echo base_url()?>css/fonts.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.modal-dialog3 {
    width: 600px;
    margin-left: 300px;
    margin-top: 10px;
}
</style>
 <header>
    <div class="header-inner">
      <img src="<?php echo base_url()?>images/bg.jpg" alt="img" width="1400px" height="1200px">
      <div class="header-overlay">
        <div class="header-content">
        
    <div class="modal-dialog3">
        <div class="modal-content">
            <div class="modal-header">
                <font color="black"><h1 class="text-center">Register Account</h1>
            </div>
            <div class="modal-body">
                <div class="form-group">
                 <form action="register_validation" method="POST">
                   <label style="float: left">Username:</label>
                   <input type="text" class="form-control input-md" placeholder="Enter Username" name="username" required/>
                </div>
             <label style="float: left">Password:</label>
             <input type="password" class="form-control input-md" placeholder="Enter Password" name="password" required/>
             
             <label style="float: left">First Name:</label>
                 <input type="text" class="form-control input-md" placeholder="Enter First Name" name="firstname" required/>
             

             <label style="float: left">Middle Name:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter Middle Name" name="mname" required/>
             </div>

             <label style="float: left">Last Name:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter Last Name" name="lastname" required/>
             </div>

             <label style="float: left">City Address:</label>
             <div class="form-group">
                 <input type="text" class="form-control input-md" placeholder="Enter City Address" name="address" required/>
             </div>

             <label style="float: left">Email Address:</label>
             <div class="form-group">
                 <input type="email" class="form-control input-md" placeholder="Enter Email Address" name="e_address" required/>
             </div>

             <div class="form-group">
             <label style="float: left">Gender:</label>
                 <select name="gender" style="float: left">
                    <option value="Male" name="gender" required="">Male</option>
                    <option value="Female" name="gender" required="">Female</option>
                 </select>
             </div>

             <div class="form-group"><br><br>
              <label style="float: left">Contact:</label>
                 <input type="text" class="form-control input-md" placeholder="Enter Contact" name="contact" required/>
             </div>

             <label style="float: left">Birthday:</label></font>
             <div class="form-group">
                <input type="date" class="form-control input-md" placeholder="Enter Birthday" name="bday" required/>
             </div>


             <div class="form-group">
                <input id="myModal" type="submit" class="btn btn-block btn-lg btn-primary" value="Sign up"/>
             </div>

              <div class="form-group">
                 <center><span><a href="balikmo">Go Back</a></span></center>
                 
             </div>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </header>
 </head>
</html>