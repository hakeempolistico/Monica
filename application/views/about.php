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
    padding: 10px; 
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
    <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/fonts.css" rel="stylesheet">
    
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
  <style> 
#rcorners1 {
    padding: 20px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-top: 120px;
    margin-left: 10px;
    margin-right: 10px;  
}
#rcorners2 {
    border-radius: 25px;
    background: #eee;
    padding: 20px; 
    width: 100%;
    height: 100%;
   
}
.modal-dialog1 {
    width: 400px;
    margin-left: 500px;
    margin-top: 150px;
}
.modal-dialog2 {
    width: 600px;
    margin-left: 350px;
    margin-top: 100px;
}
.developers {
   float: left;
   margin: 10px;
   padding: 10px;
   max-width: 300px;
   height: 300px;
   border: 1px solid black;
}
table, td{
    padding: 80px;
    text-align: center;
    float: center;
}
</style>
  <body id="page-top" class="index">
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div id="rcorners">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <a class="navbar-brand page-scroll" href="studie"><b>StockOverflowing</b></a>
              <ul class="nav navbar-nav navbar-left">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </form>
              </ul>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="studie"><i class="fa fa-user"> PROFILE</a></i></li>
                  <li><a href="#"><i class="fa fa-globe"> NOTIFICATIONS</a></i></li>
                  <li class="active"><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a bgcolor="black" href="accsetting">Account Settings</a></li></p>
                    <li><a bgcolor="black" href="#" class="button" data-toggle="modal" data-target="#myModal">Logout</a></li>
                  </ul>
                </ul>
              </div>
          </div>
      </div>
    </nav>
      
    <div class="container" >
      <div class="row">
        <div id="rcorners1">

        <div id="rcorners2">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">ABOUT US</h2>
                <h3 class="section-subheading text-muted">StockOverflowing</h3><br>
              </div>

              <center><p>Welcome to StockOverflowing where you can share and get files and documents. Connect with anyone <br>and discuss anything you want.</p></center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <div id="rcorners2">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Developers</h2>
                    <h3 class="section-subheading text-muted">BSIS - 3A</h3>
                </div>
            </div>
            <br>

                 <div class="row">
                 <div class="col-xs-3"></div>
                <div class="col-lg-6">
                    <div class="team-member">
                       <h4><button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal3"><img src="<?php echo base_url()?>images/1.jpg" class="img-responsive" alt=""></button></h4></center> 
                       <h1>TEAM 4 </h1>
                      </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="team-member">
                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2"><img src="<?php echo base_url()?>images/imgstudent.png" class="img-responsive" alt=""></button> <h4> Ms. Stemely Joy Bertolano</h4>
            <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                 <div class="row">
                <div class="col-sm-5">
                    <div class="team-member">
                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3"><img src="<?php echo base_url()?>images/tin.jpg" class="img-responsive" alt=""></button> <h4>Ms. Christine Canimo</h4>
            <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                 <div class="row">
                <div class="col-sm-5">
                    <div class="team-member">
                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4"><img src="<?php echo base_url()?>images/imgstudent.png" class="img-responsive" alt=""></button><h4> Mr. John Robert Capistrano</h4>
            <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                 <div class="row">
                <div class="col-sm-5">
                    <div class="team-member">
                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5"><img src="<?php echo base_url()?>images/imgteacher.png" class="img-responsive" alt=""></button><h4> Mr. John Patrick Guzman</h4>
            <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
            </div>
            </div>

<!-- Modal -->
  <div class="modal" id="myModal2" role="dialog">
    <div class="modal-dialog2">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">STEMELY JOY BERTOLANO</h4>
        </div>
        <div class="modal-body">
          <center>
         <p>DOCUMENTATION</p>
        </div>
        <div class="modal-footer">
          <center>
            <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">Next</a></button>
            <a class="btn btn-primary" data-dismiss="modal">Close</a></button>
          </center>
        </div>
      </div>
    </div>
  </div> 

  <!-- Modal -->
  <div class="modal" id="myModal3" role="dialog">
    <div class="modal-dialog2">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">CHRISTINE CANIMO</h4>
        </div>
        <div class="modal-body">
         <center>
         <p>CODING</p>
        </div>
        <div class="modal-footer">
          <center>
            <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">Next</a></button>
            <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Previous</a></button>
          </center>
        </div>
      </div>
    </div>
  </div> 

  <!-- Modal -->
  <div class="modal" id="myModal4" role="dialog">
    <div class="modal-dialog2">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">JOHN ROBERT CAPISTRANO</h4>
        </div>
        <div class="modal-body">
         <center>
         <p>CODING</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal5">Next</a></button>
                <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">Previous</a></button>
                </div>
                </center>
            </div>
            </div>
            </div>
            </div> 
            <!-- Modal -->
  <div class="modal" id="myModal5" role="dialog">
    <div class="modal-dialog2">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">JOHN PATRICK GUZMAN</h4>
        </div>
        <div class="modal-body">
         <center>
         <p>UI</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Next</a></button>
                <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">Previous</a></button>
                </div>
                </center>
            </div>
            </div>
            </div>
            </div> 
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog1">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">LOGOUT Confirmation</h4></center>
        </div>
        <div class="modal-body">
         <center><p>Are you sure you want to logout?</p></center>
        </div>
        <div class="modal-footer">
          <center>
            <a href="logout" class="btn btn-primary">Yes</a></button>
            <a class="btn btn-primary" data-dismiss="modal">No</a></button>
          </center>
        </div>
      </div>
    </div>
  </div>   

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>