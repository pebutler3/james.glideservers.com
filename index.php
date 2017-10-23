<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html style="background-color:#11293a;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=":)">
    <title>James's Dev Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body style="background-color:#11293a;">
    <section class="testimonials">
        <h1 class="text-center">James Dev</h1>
        <p class="text-center">This is my dev server index page </p>
        <p class="text-center text-danger"><a class="btn btn-warning" role="button" href="logout.php">Logout</a></p>
    </section>
    <div class="container-fluid" style="background-color:#22232a;width:93%;height:100%;">
        <div class="row">
            <div class="col-md-4 item">
               <h2 class="text-center">Munin</h2> 
     	       <p class="text-center">Server monitoring</p><a class="btn btn-success btn-block" role="button" href="https://james.glideservers.com/munin/">Button</a></div>
            <div class="col-md-4 item">
                <h2 class="text-center">Flight Tracker</h2>
                <p class="text-center">PiAware, tracking planes!</p><a class="btn btn-success btn-block" role="button" href="http://james.glideservers.com:8080/">PiAware</a></div>
            <div class="col-md-4 item">
                <h2 class="text-center">Subsonic Music</h2>
                <p class="text-center">Custom music libary</p><a class="btn btn-success btn-block" role="button" href="http://james.glideservers.com:4040">Subsonic </a></div>
        </div>
        <div class="row top-buffer">
            <div class="col-md-4 item">
                <h2 class="text-center">Heading</h2>
                <p class="text-center">Paragraph</p><a class="btn btn-success btn-block" role="button" href="#">Button</a></div>
            <div class="col-md-4 item">
                <h2 class="text-center">Heading</h2>
                <p class="text-center">Paragraph</p><a class="btn btn-success btn-block" role="button" href="#">Button</a></div>
            <div class="col-md-4 item">
                <h2 class="text-center">Heading</h2>
                <p class="text-center">Paragraph</p><a class="btn btn-success btn-block" role="button" href="#">Button</a></div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container-fluid">
            <p>James Kingdom © 2017</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
