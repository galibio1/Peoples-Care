<?php
  $un="";
  $pw="";
  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
  $un=$_POST["user_name"];
  $pw=$_POST["password"];
  $co=0;
  

  
  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
    $query = "INSERT INTO user_login VALUES (:didbv, :didpw)";
  $result = oci_parse($connect, $query);
  
  $didbv = $un;
  $didpw = $pw;

  oci_bind_by_name($result, ':didbv', $didbv);
  oci_bind_by_name($result, ':didpw', $didpw);
    
    oci_execute($result);
    
  if($result) {
     // echo $row['user_name'] ."<br>\n";
    echo "Success";
    header("Location:index.php");
    }
  
  else
    echo "sorry";
    }
  

?>

<html>
  <head>
    <title>User Sign Up</title>
    
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
      <td align="center" colspan="2"><input type="submit" name="submit" value="Sign Up"></td>
    </tr>

    
    </form>
  </body>
</html>
    