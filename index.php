<?php session_start(); /* Starts the session */



if(!isset($_SESSION['UserData']['Username'])){

	header("location:login.php");

	exit;

}

?>







<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="../../favicon.ico">

    <title>James's Dev</title>



    <title>DevOPS</title>



    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->

    <link href="justified-nav.css" rel="stylesheet">

  </head>



  <body>



    <div class="container">

         <p><a class="btn btn-danger" href="logout.php">Logout</a></p>

      </div>



      <!-- Jumbotron -->

      <div class="jumbotron">

        <h1>Development Server</h1>

        <p class="lead">You have reached James's dev server, view projects by clicking on the links below</p>

		

		

      </div>



      <!-- Example row of columns -->

      <div class="row">

      <!--  <div class="col-lg-4">

          <h2>Squid Reports</h2>

          <p>SARG generated reports showing squid traffic, updated via cron every 60 seconds. </p>

          <p><a class="btn btn-primary" href="squid-reports" role="button">View &raquo;</a></p>

        </div>-->

        <div class="col-lg-4">

          <h2>OpenStreetMap</h2>

          <p>iD EDITOR (PORT 80)</p>

          <p><a class="btn btn-primary" href="http://devops:8080" role="button">View  &raquo;</a></p>

       </div>

        <div class="col-lg-4">

          <h2>Munin log analyse</h2>

          <p>Munin</p>

          <p><a class="btn btn-primary" href="http://james.glideservers.com/munin/" role="button">View  &raquo;</a></p>

        </div>

        <div class="col-lg-4">

          <h2>SubSonic Web Server</h2>

          <p>Subsonic media player, for all my music needs</p>

          <p><a class="btn btn-primary" href="http://james.glideservers.com:4040" role="button">View  &raquo;</a></p>

        </div>

       </div>

        <div class="row">

	<div class="col-lg-4">

	  <h2>FileRun</h2>

	  <p>Opensource File Syncing Software</p>

	  <p><a class="btn btn-primary disabled" href="#" role="button">UNDER DEVELOPMENT</a></p>

	  </div>       



       </div>



      <!-- Site footer -->

      <footer class="footer">

        <p>&copy; JamesKingdom 2017</p>

      </footer>



    </div> <!-- /container -->





    <!-- Bootstrap core JavaScript

    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>

</html>

				
