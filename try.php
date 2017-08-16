<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" id="table">

		<table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

	
			<tr>
				<td colspan="2" ><a style="text-decoration: none;" href="#">Search Information</a><br /><br /></td>
			</tr>

			<tr>
			<td style="text-align:left;"><b>National ID:<b></td><td ><input  type="text" name="nID"></input><br /><br /></td>
			</tr>


			<tr>
			<td colspan="2"><input style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Search By National ID"></input></td>
		
			</tr>
		</table>
</form>

<?php

if(isset($_REQUEST['submit']))
  {
    

    $_SESSION['userNid']=$_REQUEST['nID'];
    header('Location:update.php');
   
}
  ?>
</body>
</html>