<?php
		session_start();
	$un="";
	$pw="";
	
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
	$un=$_POST["user_name"];
	$pw=$_POST["password"];
	$co=0;
	
	$hand2=fopen("log.txt","a");
	
	$connect = oci_connect("wahid", "wahid", "localhost/XE");
	
    $query = "SELECT * FROM user_login WHERE user_name = :didbv and password = :didpw";
	$result = oci_parse($connect, $query);
	
	$didbv = $un;
	$didpw = $pw;

	oci_bind_by_name($result, ':didbv', $didbv);
	oci_bind_by_name($result, ':didpw', $didpw);
    
    oci_execute($result);
    
	if(($row = oci_fetch_array($result, OCI_ASSOC)) != false) {
	   // echo $row['user_name'] ."<br>\n";
	   $_SESSION["login_user"]=$un;
		header("Location:userlogin.php");
		fwrite($hand2, "LOGGED BY--> ".$un ." - AT ". date("Y-m-d h:i:sa") .PHP_EOL);}
	
	else
		echo "sorry";
		}
	

?>

<html>
	<head>
		<title>User Login</title>
		
	</head>
	
	<body>
	
		<form name="Hello User" method="post" >
			
			<h2 style="color:blue; text-align:center;">Enter User name and Password</h2>
		<table style="color:blue; align:center; margin-left: 500px;  background-color:#f1f1c1">
		<tr>
			<th>User Name</th>
			<td><input type="text" name="user_name"></td>
		</tr>
		
		<tr>
			<th>Password</th>
			<td><input type="password" name="password"></td>
		</tr>
		
		<tr >
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
		</tr>

		<tr >
			<td align="center" colspan="4"><a href="demo.php">Sign Up Now</a></td>
		</tr>

		
		</form>
	</body>
</html>
		