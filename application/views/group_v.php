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
    <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/font.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/profile.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/gridprofiles.css" rel="stylesheet">
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
    background-color: gray;
    width: 1340px;
    height: 400px;
    float: right;  
    display: block;
    overflow: hidden;
}
#rcorners2 {
    border-radius: 25px;
    background: #eee;
    padding: 20px; 
    width: 100%;
    height: 100%;
   
}
#cover {
    padding: 20px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-top: 120px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 1000px;  
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
img
{
  width: 1340px;
  height: 410px;
  vertical-align:baseline;
}
@media (min-width: 768px)
{header {
  margin-top: 70px;
  box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  height:   400px;
  position: relative;
  width:auto;
}}
table, td{
    padding: 80px;
    text-align: center;
    float: center;
}
</style>
  <body>
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
          <a class="navbar-brand page-scroll" href="index"><b>StockOverflowing</b></a>
          <ul class="nav navbar-nav navbar-left">
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index"><i class="fa fa-user"> PROFILE</a></i></li>
              <li><a href="#"><i class="fa fa-globe"> NOTIFICATIONS</a></i></li>
              <li><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a bgcolor="black" href="#">Account Settings</a></li></p>
                    <li><a href="#" class="button" data-toggle="modal" data-target="#logout">Logout</a></li>
            </ul>
          </div>
          </div>
        </div>
      </nav>

<header>
  <figure class="profile-banner">
    <div id="rcorners1">
      <div class="row">
        <div class="col-lg-10">
          <img src="<?php echo base_url()?>images/1.jpg" class="img-responsive1" alt=""></button>
        </div>
      </div>
    </div>
  </figure>
  <div class="profile-stats">
    <ul>
      <li>13    <span>Members</span></li>
      <li>1,354 <span>Files</span></li>
      <li>32    <span>blabla</span></li>
      <li>324   <span>blabla</span></li>
    </ul>
    <a href="javascript:void(0);" class="status">
      Add Member
    </a>
    <a href="" data-toggle="modal" data-target="#myModal1" class="status">Leave Group</a>
  </div><br>
  <h2>Group Name <small>mo to!</small></h2>
</header>
<div class="info">
<div class="col-2 menu reply">
  <ul>
    <li>ChristineCanimo</li>
    <li>Info</li>
    <li>Tnfo</li>
    <li>info</li>
  </ul>
</div>
<div class="col-7 nav2">
<ul>
  <li><a href="grpfiles">Files</a></li>
  <li><a href="grpmembers">Members</a></li>
  <li><a href="friends">blabla</a></li>
  <li style="float:right"><a href="editgrp">Edit Group</a></li>
</ul>
</div>
<div class="reply">
 <a style="text-align: center; float: left" href="">UPLOAD FILE</a>
 </div>
<div class="col-5 dashboard">
<div class="col-13 status">
<h2>Subject</h2><br>
<p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
  <p>Resize the browser window to see how the content respond to the resizing.</p>
<p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
  <p>Resize the browser window to see how the content respond to the resizing.</p>
<p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
  <p>Resize the browser window to see how the content respond to the resizing.</p>
<div class="col-9 nav2 reply">
<a href="">Reply</a>
</div>
</div>
</div>

<div class="col-3 rightside">
<p style="float: right"><a href="#" class="button" data-toggle="modal" data-target="#event">Create Event</a></p>
<br>
<p>ANO ILALAGAY DITO?</p>
<h4>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
 Resize the browser window to see how the content respond to the resizing.
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.</h4>
</div>

<div class="col-3 rightside">
<p><font color="darkgray">Anything2</p><br>
<h4>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.</p>
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
 Resize the browser window to see how the content respond to the resizing.</p>
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.</p></h4>
</div>

</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog1">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Leave Group Confirmation</h4>
        </div>
        <div class="modal-body">
         <p>Are you sure you want to leave this group?</p>
        </div>
        <div class="modal-footer">
          <a href="index" class="btn btn-primary">Yes</a></button>
          <a class="btn btn-primary" data-dismiss="modal">No</a></button>
        </div>
      </div>
    </div>
  </div>

 <!-- Modal -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog">

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
          <Center>
            <a href="logout" class="btn btn-primary">Yes</a></button>
            <a class="btn btn-primary" data-dismiss="modal">No</a></button>
          </Center>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="event" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Create Event</h3></center>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <font color="black">
            <form action="" method="POST">  
            <input type="hidden" value="" name="event_id">
            <input type="hidden" value="" name="event_creator">
            <input type="hidden" value="" name="group_name">
            <label>Event Name:</label>
            <input type="text" name="event_name" class="form-control input-md" placeholder="Name of Event">
          </div>

          <div class="form-group">
            <label>Event Place:</label>
            <input  type="text" name="event_place" class="form-control input-md" placeholder="Venue of the Event">
          </div>

          <div class="form-group">
            <label>Event Date:</label>
            <input type="date" name="event_date" class="form-control input-md" placeholder="Date of event">
          </div>

          <div class="modal-footer">
            <center><a href="logout" class="btn btn-default">Create</a></button></center>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="js/index.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>