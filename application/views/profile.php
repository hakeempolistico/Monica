<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <style> 
#rcorners {
    background: #000;
    padding: 20px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-left: 10px;
    margin-right: 10px;  
}
#rcorner {
    background: #000;
    padding: 2px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-left: 0px;
    margin-right: 0px;  
}
</style>
    <!-- Bootstrap -->
        <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/agency.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/font.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
    <div id="rcorners">
      <div class="container">
        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="studie"><b>StockOverflowing</b></a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="studie"><i class="fa fa-user"> PROFILE</a></i></li>
              <li><a href="#"><i class="fa fa-globe"> NOTIFICATIONS</a></i></li>
              <li><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a href="#">Account Settings</p></a></li><br>                   
                    <li><a href="#" class="button" data-toggle="modal" data-target="#myModal">Logout</a></li>
                  
                  </ul>
              </li>
            </ul>
          </div>
          </div>
      </div>
    </nav>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Logout Confirmation:</h4></center>
        </div>
        <div class="modal-body">
         <center><p>Are you sure you want to logout?</p></center>
            </div>
            <div class="modal-footer">
                <center><a href="logout" class="btn btn-primary">Yes</a>
                <a class="btn btn-danger" data-dismiss="modal">No</a></center>
            </div>
            </div>
            </div>
            </div>
    <br><br><br><br><br><br><br><br>
      <div class="container">

        </div>
      </div>
    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>