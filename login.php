<?php session_start(); /* Starts the session */
include ('config.php');


	



	/* Check Login form submitted */	



	if(isset($_POST['Submit'])){



		/* Define username and associated password array */



		$logins = array('admin' => $passw);



		



		/* Check and assign submitted Username and Password to new variable */



		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';



		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';



		



		/* Check Username and Password existence in defined array */		



		if (isset($logins[$Username]) && $logins[$Username] == $Password){



			/* Success: Set session variables and redirect to Protected page  */



			$_SESSION['UserData']['Username']=$logins[$Username];



			header("location:index.php");



			exit;



		} else {



			/*Unsuccessful attempt: Set error message */



			$msg="<span style='color:red'>Invalid Login Details</span>";



		}



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







    <title>Signin To James Dev</title>







    <!-- Bootstrap core CSS -->



    <link href="bootstrap.min.css" rel="stylesheet">







    <!-- Custom styles for this template -->



    <link href="signin.css" rel="stylesheet">



  </head>







  <body>







    <div class="container">







<form action="" method="post" name="Login_Form">



  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">



    <?php if(isset($msg)){?>



    <tr>



      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>



    </tr>



    <?php } ?>



    <tr>



      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>



    </tr>



    <tr>



      <td align="right" valign="top">Username</td>



      <td><input name="Username" type="text" class="Input"></td>



    </tr>



    <tr>



      <td align="right">Password</td>



      <td><input name="Password" type="password" class="Input"></td>



    </tr>



    <tr>



    <td> </td>







      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>



    </tr>



  </table>



</form>



    </div> <!-- /container -->







    <!-- Bootstrap core JavaScript



    ================================================== -->



    <!-- Placed at the end of the document so the pages load faster -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>



  </body>



</html>



