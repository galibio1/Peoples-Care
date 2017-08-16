<?php
session_start();
if(isset($_SESSION['userNid'])) {
//echo "Your session is running " . $_SESSION['userNid'];
$nid=$_SESSION['userNid'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div  id="products" class="container-fluid text-center bg-grey">
            <h1 class="header" style="text-align: center;"><a href="edit.php">
      <strong>Update User Information</strong></a></h1>
            <ul class="nav nav-pills" style=" font-size: 18px;">
            <li><a  href="userlogin.php" class="">Home</a></li>
                <li class="active"> <a data-toggle="tab" href="#profile" class="">User Info</a></li>
                
                
                <li><a data-toggle="tab" href="#health" class="">Health Care</a></li>
                <li><a data-toggle="tab" href="#Children" class="">Children</a></li>
                <li><a data-toggle="tab" href="#allowence" class="">Allowence</a></li>
                
                <li><a data-toggle="tab" href="#loan" class="">Loan</a></li>
                <li><a data-toggle="tab" href="#qualification" class="">Qualification</a></li>
                <li><a  href="logout.php" class="">Log Out</a></li>
  
            </ul>


            <div class="tab-content" style="text-align: center;font-size: 20px;">
                <div id="location" class="tab-pane fade">
                    <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-4 productitem">
                            <div class="thumbnail">
                               <h2>Insert Location</h2>
                               



<form method="post" id="location">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

  
      <tr>
        <td colspan="2" ><a style="text-decoration: none;" href="#">Insert New Location</a><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Location Id:<b></td><td ><input  type="text" name="locid"></input><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Address:</b></td><td><textarea name="adrs">
      </textarea></input><br/><br /></td>
    
      <tr>
      <td style="text-align:left;"><b>Postal code:<b></td><td><input  type="text" name="postal"></input><br/><br/></td>
      </tr>
      
      <tr>
      <td style="text-align:left;"><b>City:<b></td><td><input  type="text" name="city"></input><br /><br /></td>
      
      </tr>

      <tr>
      <td style="text-align:left;"><b>Ward Id:<b></td><td><input type="text" name="wardid"></input><br/><br/></td>
      </tr>

      

      <tr>
      <td colspan="2"><input id="myBtn" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Insert New Location"></input></td>
    
      </tr>
    </table>
</form>



                            </div>
                        </div>
                   
                 
                    </div>
                    
                
                </div>



                 <div id="profile" class="tab-pane fade in active">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Insert User Info</h2>

<form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

  
      <tr>
        <td colspan="2" ><a style="text-decoration: none;" href="#">Insert New Employee</a><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Full NAME:<b></td><td ><input  type="text" name="name"></input><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>National ID:</b></td><td><input  type="text" name="nid"></input><br /><br /></td>
      </tr>
    
      
      <tr>
      <td style="text-align:left;"><b>Phone Number:<b></td><td><input type="text" name="phone"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>BirthDate:<b></td><td><input type="date" name="bd"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Sex:<b></td><td><input  type="text" name="sex"></input><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Slum Id:<b></td><td><input  type="text" name="slmid"></input><br /><br /></td>
      </tr>


      <tr>
      <td style="text-align:left;"><b>FAMILY MEMBER:<b></td><td><input  type="text" name="fambr"></input><br /><br /></td>
      </tr>


      <tr>
      <td style="text-align:left;"><b>LOCATION ID:<b></td><td><input  type="text" name="locid"></input><br /><br /></td>
      </tr>

      <tr>
      <td colspan="2"><input style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Register"></input></td>
    
      </tr>
    </table>
</form>



                                 
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                





                <div id="health" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Insert Helath Care Status</h2>
                                  

                                  <form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

  
      <tr>
      <td style="text-align:left;"><b>Diseases:<b></td><td><input  type="text" name="diseases"></input><br/><br/></td>
      </tr>
      
      <tr>
      <td style="text-align:left;"><b>Health Care Center:<b></td><td><input type="text" name="hcenter"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>Volunteer Id:<b></td><td><input type="text" name="volid"></input><br/><br/></td>
      </tr>


      <tr>
      <td colspan="2"><input id="myBtnx" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Update"></input></td>
    
      </tr>
    </table>
</form>


<?php
  $pw="";
  $hc="";
  $vol="";
  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
  $pw=$_POST["diseases"];
  $hc=$_POST["hcenter"];
  $vol=$_POST["volid"];
  

  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
    $query = "Update HEALTHCARE SET Diseases=:didpw, HealthCare_Center=:didhc, Volunteer_Id=:didvo 
    WHERE NATIONAL_ID=$nid";
  $result = oci_parse($connect, $query);
  
  $didpw = $pw;
  $didhc = $hc;
  $didvo = $vol;
  
  oci_bind_by_name($result, ':didpw', $didpw);
  oci_bind_by_name($result, ':didhc', $didhc);
  oci_bind_by_name($result, ':didvo', $didvo);
    
    oci_execute($result);
    
 
    }
  

?>



                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>

                <div id="Children" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Insert Children Info</h2>
                                 

                                  <form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>



      <tr>
      <td style="text-align:left;"><b>CHILDREN NAME:</b></td><td><input  type="text" name="cname"></input><br /><br /></td>
      </tr>
    
      <tr>
      <td style="text-align:left;"><b>Father NAME:<b></td><td><input  type="text" name="fname"></input><br/><br/></td>
      </tr>
      
      <tr>
      <td style="text-align:left;"><b>MOTHER NAME:<b></td><td><input type="text" name="mname"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>BirthDate:<b></td><td><input type="text" name="dob"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>CLASS:<b></td><td><input type="text" name="class"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>SCHOOL NAME:<b></td><td><input type="text" name="sname"></input><br/><br/></td>
      </tr>

      <tr>
      <td colspan="2"><input id="myBtnchild" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Register"></input></td>
    
      </tr>
    </table>
</form>

<?php
 
  $pw="";
  $hc="";
  $iw="";
  $jc="";
  $kw="";
  $lc="";
  
  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
  
  $pw=$_POST["cname"];
  $hc=$_POST["fname"];
  $iw=$_POST["mname"];
  $jc=$_POST["dob"];
  $kw=$_POST["class"];
  $lc=$_POST["sname"];
 
 
  

  
  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
    $query = "INSERT INTO CHILDREN VALUES ( :didpw, :didhc, :didpd, :didhe , :didpf, :didhi  )";
  $result = oci_parse($connect, $query);
  
  
  $didpw = $pw;
  $didhc = $hc;
  $didpd = $iw;
  $didhe = $jc;
  $didpf = $kw;
  $didhi = $lc;
  
  

  
  oci_bind_by_name($result, ':didpw', $didpw);
  oci_bind_by_name($result, ':didhc', $didhc);
  oci_bind_by_name($result, ':didpd', $didpd);
  oci_bind_by_name($result, ':didhe', $didhe);
  oci_bind_by_name($result, ':didpf', $didpf);
  oci_bind_by_name($result, ':didhi', $didhi);
  
    
    oci_execute($result);
    
 }
?>





                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                





                <div id="allowence" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Update Allowence</h2>
                                  


                                  <form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

      <tr>
      <td style="text-align:left;"><b>EMPLOYEMENT:<b></td><td><input  type="text" name="user"></input><br/><br/></td>
      </tr>
      
      <tr>
      <td style="text-align:left;"><b>START DATE:<b></td><td><input type="text" name="sdob"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>END DATE:<b></td><td><input type="text" name="edob"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>ALLOWANCE MONEY:<b></td><td><input  type="text" name="mon"></input><br /><br /></td>
      </tr>

      <tr>
      <td colspan="2"><input id="myBtnallow" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Update"></input></td>
    
      </tr>
    </table>
</form>


<?php
  $un="";
  $pw="";
  $hc="";
  $vol="";
  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
  $un=$_POST["user"];
  $pw=$_POST["sdob"];
  $hc=$_POST["edob"];
  $vol=$_POST["mon"];
  

  
  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
    $query = "Update ALLOWANCE SET EMPLOYEMENT=:didbv, START_DATE=:didpw, END_DATE=:didhc, ALLOWANCE MONEY=:didvo
                                WHERE NATIONAL_ID=$nid";
  $result = oci_parse($connect, $query);
  
  $didbv = $un;
  $didpw = $pw;
  $didhc = $hc;
  $didvo = $vol;
  

  oci_bind_by_name($result, ':didbv', $didbv);
  oci_bind_by_name($result, ':didpw', $didpw);
  oci_bind_by_name($result, ':didhc', $didhc);
  oci_bind_by_name($result, ':didvo', $didvo);
    
    oci_execute($result);
    
  
    }
  

?>





                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>


                 



                <div id="loan" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Update Loan</h2>
                                  


                                  <form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

  


      <tr>
      <td style="text-align:left;"><b>ALLOWANCE STATUS:</b></td><td><input  type="text" name="allsta"></input><br /><br /></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>BANK NAME:<b></td><td><input type="text" name="bnam"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>AMOUNT:<b></td><td><input type="text" name="amount"></input><br/><br/></td>
      </tr>

      <tr>
      <td colspan="2"><input id="myBtnloan" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Update"></input></td>
    
      </tr>
    </table>
</form>


<?php
  $un="";
  //$pw="";
  $hc="";
  $vol="";
  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
  $un=$_POST["allsta"];
 // $pw=$nid;
  $hc=$_POST["bnam"];
  $vol=$_POST["amount"];
  

  
  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
    $query = "Update LONE SET ALLOWANCE_STATUS=:didbv, BANK_NAME=:didhc, AMOUNT=:didvo
                                WHERE NATIONAL_ID=$nid";
  $result = oci_parse($connect, $query);
  
  $didbv = $un;
  $didpw = $pw;
  $didhc = $hc;
  $didvo = $vol;
  

  oci_bind_by_name($result, ':didbv', $didbv);
  oci_bind_by_name($result, ':didpw', $didpw);
  oci_bind_by_name($result, ':didhc', $didhc);
  oci_bind_by_name($result, ':didvo', $didvo);
    
    oci_execute($result);
    
  
    }
  

?>

                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                <div id="qualification" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Update qualification</h2>
                                  


                                  <form method="post" id="table">

    <table style='font-family: "Comic Sans MS", cursive, sans-serif;text-align: center; margin:0 auto;'>

  
      <tr>
      <td style="text-align:left;"><b>EMPLOYEEMENT CRITERIA:<b></td><td><input type="text" name="ect"></input><br/><br/></td>
      </tr>

      <tr>
      <td style="text-align:left;"><b>LITERACY LEVEL:<b></td><td><input type="text" name="level"></input><br/><br/></td>
      </tr>

      <tr>
      <td colspan="2"><input id="myBtnqua" style="background-color: #189AD4; font-size: 25px;color: white;" type="submit" name="submit" value="Update"></input></td>
    
      </tr>
    </table>
</form>


<?php

  $pw="";
  $hc="";

  
if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
{
 
  $pw=$_POST["ect"];
  $hc=$_POST["level"];
  

  

  $connect = oci_connect("wahid", "wahid", "localhost/XE");
  
  $query = "Update LONE SET EMPLOYEEMENT_CRITERIA=:didpw, LITERACY_LEVEL=:didhc
                                WHERE NATIONAL_ID=$nid";
  $result = oci_parse($connect, $query);
  
  $didpw = $pw;
  $didhc = $hc;
  

  oci_bind_by_name($result, ':didpw', $didpw);
  oci_bind_by_name($result, ':didhc', $didhc);
    
    oci_execute($result);
    
  
    }
  

?>



                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>



         </div>



        <script>
        document.getElementById("myBtn").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });

</script>
<script>
        document.getElementById("myBtnqua").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
</script>

<script>
        document.getElementById("myBtnqualo").addEventListener("click", function(){
            alert("Successfuly Inserted");
            </script>

<script>
            document.getElementById("myBtnquao").addEventListener("click", function(){
            alert("Successfuly Inserted");
            </script>  



        <script>
            document.getElementById("myBtnaco").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>

        <script>
            document.getElementById("myBtnvol").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>

          <script>
            document.getElementById("myBtnx").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>


          <script>
            document.getElementById("myBtnpod").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>

         <script>
            document.getElementById("myBtnjob").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>

         <script>
            document.getElementById("myBtnloan").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>

        <script>
            document.getElementById("myBtnchild").addEventListener("click", function(){
            alert("Successfuly Inserted");
        });
        </script>



</body>
</html>
