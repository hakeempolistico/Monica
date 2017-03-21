<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php foreach($names as $name){?>
  <title><?php echo $name->group_name." ";?> </title>
  <?php }?>
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
    width: 65px;
    height: left;  
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#taas").click(function(){
        $("#baba").slideToggle("slow");
    });
});
</script>
  </head>
  <style> 
#rcorners1 {
    background-color: gray;
    width: 1340px;
    height: 400px;
    float: right;  
    border-radius: 0%;
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
.modal-dialog3 {
    width: 500px;
    height: 100%;
    margin-left: 404px;
    margin-top: 130px;
}
img
{
  width: 65px;
  height: 65px;
  vertical-align:baseline;
}
textarea {
    resize: none;
}
#panel, #flip {
    padding: 5px;
    background-color: #fcf8e3;
    border: solid 1px #c3c3c3;
    width: 267px;
}

#panel {
    padding: 5px;
    display: none;
    overflow: auto;
    height: 200px;
}
#taas {
    padding: 5px;
    background-color: #fcf8e3;
    border: solid 1px #c3c3c3;
    width: 267px;
    width: 260px;
    padding-bottom: 20px;
}

.add {
    background: #e9ebee;
    border: 1px solid #9cb4d8;
    border-radius: 2px;
    color: #162643;
    cursor: default;
    display: block;
    float: left;
    height: 20px;
    margin: 0 4px 4px 0;
    padding: 0 3px;
    position: relative;
    white-space: nowrap;
}
.add .remove {
    left: 1px;
    margin: 0;
    outline: none;
    position: relative;
    top: 2px;
}
@media (min-width: 768px)
{header {
  margin-top: 70px;
  box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  height:   400px;
  position: relative;
  width:auto;
}}
</style>
  <body style="background-color: #ece8ce">
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
          <a class="navbar-brand page-scroll" href="<?php echo base_url() ?>home/home"><b>StockOverflowing</b></a>
          <ul class="nav navbar-nav navbar-left">
          <form action="<?php echo base_url(); ?>home/search" method="post" role="search">
            <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <div class="input-group">
            <input type="submit" value="search" name="save"/>
            </div>
            </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url() ?>home/home"><i class="fa fa-home"> HOME</a></i></li>
              <li><a href="<?php echo base_url() ?>home/index"><i class="fa fa-user"> PROFILE</a></i></li>
              <li><a href="#"><i class="fa fa-globe"> NOTIFICATIONS</a></i></li>
              <li><a href="<?php echo base_url() ?>home/aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a bgcolor="black" href="<?php echo base_url() ?>home/accsetting">Account Settings</a></li></p>
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
                <div class="cover">
                      <?php foreach($details as $detail){?>
                       <img src="<?php echo base_url();?>images/usercover<?php echo $detail->idnumber;?>_.jpg" class="img-responsive1" alt=""></button>
                        <?php }?>
                      </div>
                    </div>
                </div>
                </div>
  </figure>

  <div class="profile-stats">
    <ul>
    
      <li><?php foreach($names as $name){?><?php echo $name->no_members." ";?><span>Members</span><?php }?></li>
      <li>1,354 <span>Files</span></li>
      <li><?php foreach($eventnumbers as $eventnumber){?><?php echo $eventnumber->no_events." ";?><span>Events/Schedules</span><?php }?></li>
      <li>324   <span>blabla</span></li>
      
    </ul>
    <a href="" data-toggle="modal" data-target="#myModal1" class="status">Leave Group</a>
  </div><br>
  <?php foreach($names as $name){?>
  <h2><?php echo $name->group_name." ";?> </h2>
  <?php }?>
</header>
<div class="info">
<div class="col-2 menu">
  <ul>
    <?php foreach($details as $detail){?>
    <li>
    <?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>
    <li>
    <?php echo $detail->gender." ";?>
    </li>
    <li>
    <?php echo $detail->bday." ";?>
    </li>
    <li>
    <?php echo $detail->address." ";?>
    </li>
    <?php }?></li>
  </ul>
<br>
  <div id="flip"><h3>Group List</h3></div>
    <div id="panel" class="menu form-control input-md">
        <?php foreach($groups as $group){?>
            <label><a style="color: black" href="<?php echo base_url();?>index.php/home/group/<?php echo $grp_id =  $group->group_id." " ;?>"><?php echo $group->group_name." ";?></a></label>
            <a href="" style="float: right;">Leave</a>
            <br>
            <?php }?>
    </div>
      </form>
  
</div>
 <div class="col-8 nav2">
  <ul>
    <li><a href="files">Files</a></li>
    <li><a href="<?php echo base_url() ?>index.php/home/members/<?php echo $grp_id =  $name->group_id." " ;?>">Members</a></li>
    <li style="float:right"><a href="edit">Edit Profile</a></li>
  </ul>
</div>

<div class="col-6 dashboard">
<div class="col-5 status">
  <h2><font color="black">Status</h2> <?php foreach($names as $name){?>
  <form action="<?php echo base_url() ?>index.php/home/grpstatus/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST"> 
  <?php }?>
  <input value="" type="hidden" name="grpstat_id" >
   <?php foreach($details as $detail){?>
  <input type="hidden" name="fname" value="<?php echo $detail->fname." ";?>">
  <input type="hidden" name="mname" value="<?php echo $detail->mname." ";?>">
  <input type="hidden" name="lname" value="<?php echo $detail->lname." ";?>"> <?php }?>
  <?php foreach($names as $name){?>
  <input type="hidden" name="group_id" value="<?php echo $name->group_id." ";?>"> <?php }?>
  <input type="hidden" name="idnumber" value ="<?php echo $this->session->userdata('idnumber'); ?>">
  <input type="hidden" name="post_date" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">
  <textarea placeholder="ux2 na ni acoe mamatay" cols="59" rows="5" name="text"></textarea>
<div class="reply">
 <input type="submit" value="POST<3">
 </div>
</div>
</form>

<?php foreach($grpstatus as $grpstatus){?>
<div class="col-5 status" >
<table>
<tr><td>
<img src="<?php echo base_url();?>images/user<?php echo $grpstatus->idnumber;?>_.jpg"></td><td>
<h3>&nbsp;&nbsp;&nbsp;
<?php echo $grpstatus->fname." ";?><?php echo $grpstatus->mname." ";?><?php echo $grpstatus->lname." ";?></h3>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $grpstatus->post_date." ";?></h5>
</td></tr></table>
<br>
<?php echo $grpstatus->text." ";?>
<hr color="black">
HAHHAHAHHAHHA
</div>
<?php }?>
</div>


<div class="col-3 rightside">
<font color="black">
<p style="float: right"><a href="#" class="button" data-toggle="modal" data-target="#event">Create Event</a></p>
<br><br>
<div class="form-group">
            <font color="black"><?php foreach($names as $name){?>
            <form action="<?php echo base_url() ?>index.php/home/addmem/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST"><?php }?>
            
          <div class="form-group" style="margin-bottom: 0px;">
          <div id="taas"><h3>Add Members</h3><br>
          <input type= text name="name" placeholder="" style="width: 200px;">
          <?php foreach($members as $member){?>
          <input type="hidden" name="member_id" value ="" />
          <input type="hidden" name="idnumber" value =""/><?php }?>
            <?php foreach($names as $name){?>
          <input type="hidden" value="<?php echo $name->group_id;?>" name="group_id"/>
              <?php }?>
               <br><br>
            <input type="submit" class="btn btn-primary" value="Add">
          </div> 
            </form>
        </div>
</div>
</div>
<div class="col-3 rightside">

<br>
<P>Events</P>
<?php foreach($events as $event){?>
<div class="col-2 events">
<h4><b>Event Name:</b><?php echo $event->event_name." ";?>
<br><b>Event Place:</b><?php echo $event->event_place." ";?>
<br><b>Date:</b><?php echo $event->event_date." ";?>
<br><b>Event Creator:</b><?php echo $event->event_creator." ";?></h4>
</div>
<?php }?>
</div>

<!-- Modal -->
  <div class="modal fade" id="addmem" role="dialog">
    <div class="modal-dialog3">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          
        </div>
        </div>

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
          <a href="<?php echo base_url();?>index.php/home/leavegrp/<?php echo $grp_id =  $name->group_id." " ;?>" class="btn btn-primary">Yes</a></button>
          <a class="btn btn-primary" data-dismiss="modal">No</a></button>
        </div>
      </div>
    </div>
  </div>

 <!-- Modal -->
  <div class="modal fade" id="logout" role="dialog">
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
          <Center>
            <a href="<?php echo base_url();?>index.php/home/logout" class="btn btn-primary">Yes</a></button>
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
            <form action="<?php echo base_url();?>index.php/home/create_event/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST">
            <input type="hidden" value="<?php echo $this->session->userdata('idnumber'); ?>" name="idnumber">  
            <input type="hidden" value="" name="event_id">
            <?php foreach($details as $detail){?>
            <input type="hidden" value="<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>" name="event_creator"><?php }?>
            <?php foreach($names as $name){?>
            <input type="hidden" value="<?php echo $name->group_name;?>" name="group_name">
            <input type="hidden" name="member_id" value="<?php echo $name->member_id;?>">  
            <input type="hidden" value="<?php echo $name->group_id;?>" name="group_id"><?php }?>
            <label>Event Name:</label>
            <input type="text" name="event_name" class="form-control input-md" placeholder="Name of Event">
          </div>

          <div class="form-group">
            <label>Event Place:</label>
            <input  type="text" name="event_place" class="form-control input-md" placeholder="Venue of the Event">
          </div>

          <div class="form-group">
            <label>Event Date:</label>
            <input type="date" name="event_date" class="form-control input-md" min="2017-03-25" placeholder="Date of event">
          </div>

          <div class="modal-footer">
            <center><input type="submit" class="btn btn-default" value="CREATE"></center>
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