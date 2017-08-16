<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#95d0f9;">
<strong><h1 style="font: bold; text-align: center;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"">User Details</h1></strong>
  <div class="panel panel-default" style="background-color: #d7e0dd; text-align:center; justify-all; font-size: 18px; padding-left: 200px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" ">
<?php

// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM people ");
oci_execute($stid);

echo "<table border='3'>\n";
	echo "<th>Emp ID";
	echo "<th>First ID";
	echo "<th>Last Name";
	echo "<th>Email";
	echo "<th>Phone";
	echo "<th>Hire Date";
	echo "<th>Job ID";
	echo "<th>Salary";
	echo "<th>Commission";
	echo "<th>Manager Id";
	echo "<th>Dept ID";

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
</body>
</html>