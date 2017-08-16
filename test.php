<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">


  <div class="col-md-12 timeline navbar-fixed-top" style="background-color: #95d0f9; text-align:center;font-size: 12px;">
  <h1>All Information</h1>
	<a href="userlogin.php"><button type="button" class="btn btn-primary">Home</button></a>
	<a href="test.php"><button type="button" class="btn btn-primary">User Profile</button></a>
  <a href="#Location"><button type="button" class="btn btn-primary">Location</button></a>
   <a href="#Accomodation"> <button  type="button" class="btn btn-primary">Accomodation</button></a>
   <a href="#Volunteer"> <button type="button" class="btn btn-primary">Volunteer</button></a>
     <a href="#Job"> <button type="button" class="btn btn-primary">Job Status</button></a>
    <a href="#Health"><button type="button" class="btn btn-primary">Health Care</button></a>
    <a href="#Education"><button type="button" class="btn btn-primary">Education</button></a>
     <a href="#Loan"> <button type="button" class="btn btn-primary">Loan Status</button></a>
    <a href="#Children"><button type="button" class="btn btn-primary">Children</button></a>
    <a href="#Allowence"><button type="button" class="btn btn-primary">Allowence</button></a>
    <a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a>
    


  </div>



  <div id="Profile" class="col-md-12 timeline" style="margin-top:130px; text-align: center;font-size: 25px;">
<div class="thumbnail ">
  <h2>Profile Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM people");
oci_execute($stid);

echo "<table border=2>\n";
echo "<th> Name ";
echo "<th text-align='center';> National Id ";
echo "<th> DOB ";
echo "<th> Phone ";
echo "<th> Gender ";
echo "<th text-align=center> Slum Id ";
echo "<th> Family Member ";
echo "<th> Location Id ";

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 
</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="Location"  class="col-md-12 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Accomodation Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ACCOMMODATION");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 


</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="Accomodation" class="col-md-10 timeline" style="text-align: center;font-size: 25px;">
<div class="thumbnail ">
  <h2>Profile Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ACCOMMODATION ");
oci_execute($stid);


	

while ($row = oci_fetch_array ($stid, OCI_NUM)) {
    echo "Full Name : ".$row[0]."<br>";
	echo "National ID : ".$row[1]."<br>";
	echo "Date of Birth : ".$row[2]."<br>";
	echo "Phone Number : ".$row[3]."<br>";
	echo "Gender : ".$row[4]."<br>";
	echo "Slum ID : ".$row[5]."<br>";
	echo "Family Member : ".$row[6]."<br>";
	echo "Location Id : ".$row[7]."<br>"; 
}


?>
</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="QUALIFICATION"  class="col-md-10 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Qualification Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM QUALIFICATION");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 


</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>



  <div id="Job" class="col-md-10 timeline" style="text-align: center;font-size: 25px;">
<div class="thumbnail ">
  <h2>Profile Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM JOB");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 
</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="Health"  class="col-md-10 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Accomodation Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM HEATCARE_CENTER");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 

</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="VOLUNTEER" class="col-md-10 timeline" style="text-align: center;font-size: 25px;">
<div class="thumbnail ">
  <h2>Profile Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM VOLUNTEER");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 
</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="AllOWENCE"  class="col-md-10 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Allowence Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM AllOWENCE");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 

</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="LOAN" class="col-md-10 timeline" style="text-align: center;font-size: 25px;">
<div class="thumbnail ">
  <h2>Profile Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM LONE");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?> 
</div>
<br/><hr> <br/> <br/> <hr><br/> <br/>
  </div>




  <div id="CHILDREN"  class="col-md-10 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Accomodation Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM Children ");
oci_execute($stid);


	

while ($row = oci_fetch_array ($stid, OCI_NUM)) {
    echo "Full Name : ".$row[0]."<br>";
	echo "National ID : ".$row[1]."<br>";
	echo "Date of Birth : ".$row[2]."<br>";
	echo "Phone Number : ".$row[3]."<br>";
	echo "Gender : ".$row[4]."<br>";
	echo "Slum ID : ".$row[5]."<br>";
	echo "Family Member : ".$row[6]."<br>";
	echo "Location Id : ".$row[7]."<br>"; 
}


?>


</div>
  </div>


<div id="EDUCATION"  class="col-md-10 timeline" style="text-align: center;font-size: 25px;">

<div class="thumbnail ">
  <h2>Accomodation Panel</h2>
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM Education ");
oci_execute($stid);


  

while ($row = oci_fetch_array ($stid, OCI_NUM)) {
    echo "Full Name : ".$row[0]."<br>";
  echo "National ID : ".$row[1]."<br>";
  echo "Date of Birth : ".$row[2]."<br>";
  echo "Phone Number : ".$row[3]."<br>";
  echo "Gender : ".$row[4]."<br>";
  echo "Slum ID : ".$row[5]."<br>";
  echo "Family Member : ".$row[6]."<br>";
  echo "Location Id : ".$row[7]."<br>"; 
}


?>


</div>
  </div>



</div>

</body>
</html>