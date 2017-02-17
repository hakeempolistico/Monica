<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teachers</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index"><b>STUDENTS MANAGEMENT</a></b>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="index">HOME</a></li>
              <li><a href="aboutie">ABOUT</a></li>
              <li><a href="studie">STUDENTS</a></li>
              <li class="active"><a href="teachie">TEACHERS</a></li>
              <li><a href="logout">LOGOUT</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <br>
      <div class="container">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h1><b><center>Teachers Table</b></h1></center>
          </div>
        <div class="panel-body">
        <div class="panel-default">
        <table class="table table-bordered">
          <thead>
            <th> Name </th>
            <th> Age </th>
            <th> City Address </th>
            <th> Birthdate </th>
            <th> Birthplace </th>
            <th> Gender </th>
            <th> Civil Status </th>
            <th> Action </th>
          </thead>
          <tfoot>
            <th> Name </th>
            <th> Age </th>
            <th> City Address </th>
            <th> Birthdate </th>
            <th> Birthplace </th>
            <th> Gender </th>
            <th> Civil Status </th>
            <th> Action </th>
          </tfoot>
          <tbody>
            <tr>
              <td> John Patrick Lintao Guzman </td>
              <td> 18 </td>
              <td> Paco, Manila </td>
              <td> August 16, 1998 </td>
              <td> Quezon City </td>
              <td> Male </td>
              <td> Single </td>
              <td>
              <a href="edit.html"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="remove.html"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td> John Robert Cristobal Capistrano </td>
              <td> 18 </td>
              <td> Abandon, Bulacan </td>
              <td> August 17, 1998 </td>
              <td> Makati City </td>
              <td> Male </td>
              <td> Single </td>
              <td>
              <a href="edit.html"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="remove.html"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td> Christine Veracruz Canimo </td>
              <td> 18 </td>
              <td> Sa tabi-tabi</td>
              <td> February 4, 1998 </td>
              <td> Makati City </td>
              <td> Female </td>
              <td> Complicated </td>
              <td>
              <a href="edit.html"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="remove.html"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td> Stemely Joy Bertolano </td>
              <td> 18 </td>
              <td> Hari ng Tondo </td>
              <td> February 30, 1998 </td>
              <td> Batangas </td>
              <td> Female </td>
              <td> Single/Taken </td>
              <td>
              <a href="edit.html"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="remove.html"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>