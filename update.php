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
  <title>View User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div  id="products" class="container-fluid text-center bg-grey">
            <h1 class="header" style="text-align: center;">
	    <strong>User Information</strong></h1>
            <ul class="nav nav-pills" style=" font-size: 18px;">
                <li class="active"> <a data-toggle="tab" href="#profile" class="">User Profile</a></li>
                <li><a data-toggle="tab" href="#location" class="">Location</a></li>
                 <li><a data-toggle="tab" href="#Qualification" class="">Qualification</a></li>
                <li><a data-toggle="tab" href="#job" class="">Job Status</a></li>
                 <li><a data-toggle="tab" href="#Volunteer" class="">Volunteer</a></li>
                <li><a data-toggle="tab" href="#loan" class="">Loan</a></li>
                <li><a data-toggle="tab" href="#health" class="">Health Care</a></li>
                <li><a data-toggle="tab" href="#childinfo" class="">Children Information</a></li>
				 <li><a data-toggle="tab" href="#Allowance" class="">Allowance facilities</a></li>  
                <li><a  href="edit.php" class="">Update Information</a></li>
                <li><a data-toggle="tab" href="#" class="">Delete Entity</a></li>
                <li><a href="userlogin.php" class="">Back To Home</a></li>
                <li><a href="logout.php" class="">Log Out</a></li>

               
            </ul>

            <div class="tab-content" style="text-align: center;font-size: 20	`	px;">
                <div id="location" class="tab-pane fade">
                    <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-4 productitem">
                            <div class="thumbnail">
                               <h2>Location Panel</h2>
                               <?php
                               
								// Connects to the XE service (i.e. database) on the "localhost" machine
								$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
								if (!$conn) {
								    $e = oci_error();
								    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
								}

								$stid = oci_parse($conn, "select l.location_id,l.address,l.postal_code,l.city,l.word_id,a.slum_id,a.slum_name from location l join people p on (l.location_id=p.location_id) join accommodation a on (p.location_id=a.location_id) where p.national_id=$nid");
								oci_execute($stid);


									

								while ($row = oci_fetch_array ($stid, OCI_NUM)) {
								    echo "Location ID : ".$row[0]."<br>";
									echo "Address : ".$row[1]."<br>";
									echo "Postal Code : ".$row[2]."<br>";
									echo "City : ".$row[3]."<br>";
									echo "Ward ID : ".$row[4]."<br>";
									echo "Slum Id : ".$row[5]."<br>";
									echo "Slum Name : ".$row[6]."<br>";
									

								}


								?>
                            </div>
                        </div>
                   
                 
                    </div>
                    
                
                </div>



                 <div id="profile" class="tab-pane fade in active">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Profile Panel</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "SELECT * FROM people where NATIONAL_ID=$nid");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_RETURN_NULLS)) {

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
                  
                </div>




                 <div id="Qualification" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Educational Qualification</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select q.LITERACY_LEVEL from qualification q join people p on (q.national_id=p.national_id) where p.national_id=$nid");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Qualification Level : ".$row[0]."<br>";
										
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                <div id="job" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Job Status</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select q.EMPLOYEEMENT_CRITERIA from qualification q join people p on (q.national_id=p.national_id) where p.national_id=$nid");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Job Status : ".$row[0]."<br>";
										
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>






                <div id="Volunteer" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Volunteer Panel</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select v.volunteer_id,v.volunteer_name from volunteer v join location l on (v.location_id=l.location_id) join people p on (l.location_id=p.location_id) where p.national_id=$nid");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Volunteer ID: ".$row[0]."<br>";
										echo "Volunteer Name : ".$row[1]."<br>";
										
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>





                <div id="health" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Helath Care Panel</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select h.diseases,h.HEALTHCARE_CENTER from HEALTHCARE h join people p on (h.national_id=p.national_id) where p.national_id=$nid ");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Diseases : ".$row[0]."<br>";
										echo "HEALTHCARE CENTER : ".$row[1]."<br>";
										 
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
                                  <h2>Loan Panel</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select l.amount,l.bank_name, l.ALLOWANCE_STATUS from lone l join people p on (l.national_id=p.national_id) where p.national_id=$nid ");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Loan Amount : ".$row[0]."<br>";
										echo "Bank Name : ".$row[1]."<br>";
										echo "ALLOWANCE STATUS : ".$row[2]."<br>";
										 
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                 <div id="childinfo" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Children Information</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select c.CHILDREN_NAME, c.mother_name,c.birth_date ,c.school_name,c.class,p.location_id from children c join people p on (p.full_name=c.full_name) join location l on (l.location_id=p.location_id) where p.national_id=$nid ");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Children Name : ".$row[0]."<br>";
										echo "Another Gaurdian : ".$row[1]."<br>";
										echo "Birth Date: ".$row[2]."<br>";
										echo "School Name : ".$row[3]."<br>";
										echo "Class : ".$row[4]."<br>";
										echo "location Id : ".$row[5]."<br>";
										 
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>




                 <div id="Allowance" class="tab-pane fade">
                  <br/>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 productitem">
                            <div class="thumbnail">
                                  <h2>Allowance Facilities</h2>
                                  <?php

									// Connects to the XE service (i.e. database) on the "localhost" machine
									$conn = oci_connect('wahid', 'wahid', 'localhost/XE');
									if (!$conn) {
									    $e = oci_error();
									    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
									}

									$stid = oci_parse($conn, "select a.allowance_money, a.start_date,a.end_date from allowance a join people p on (a.national_id=p.national_id) where p.national_id=$nid ");
									oci_execute($stid);


										

									while ($row = oci_fetch_array ($stid, OCI_NUM)) {
									    echo "Allowance Money : ".$row[0]."<br>";
										echo "Start Date : ".$row[1]."<br>";
										echo "End Date : ".$row[2]."<br>";
										 
									}


									?>
                            </div>
                        </div>
           
                  
                    </div>
                  
                </div>





         </div>
</body>
</html>