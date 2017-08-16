<html>
<head>
<title>Home</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div  id="products" class="container-fluid text-center bg-grey">
            <h1 class="header" style="text-align: center;">
	    <strong><?php session_start();
	     echo "Welcome " .$_SESSION["login_user"];
		 ?>
		 	
		 </strong></h1>
            <ul class="nav nav-pills" style="margin-left: 300px; font-size: 18px;">
                <li> <a data-toggle="tab" href="userlogin.php" class="">Home</a></li>
                <li><a  href="insert.php" class="">Insert New Information</a></li>
                <li><a  href="try.php" class="">Search Exsisting Data</a></li>
                <li><a  href="test.php" class="">View All Data</a></li>
                <li><a  href="logout.php" class="">Log Out</a></li>
             
            </ul>
</body>
<html>

<?php
	
	
	if(!isset($_SESSION["login_user"]))
	{
		header("Location:login.php");
	}
	
?>
