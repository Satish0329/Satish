<!DOCTYPE html>
<html lang="en">
<head>
  <title>patient-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css"  href="patpage.css">
  <style>
  .navbar-inverse
  {
  background-color:skyblue;
  
  }
  body {
  font-family: "Lato", sans-serif;
 
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  overflow: hidden;
}

.sidenav {
  height:100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: skyblue;
  overflow-x: hidden;
  padding-top: 20px;
  transform:translate(0%,8%);
}

.sidenav a {
  padding: 10px 8px 10px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: orange;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.patpage{
width:300px;
height:300px;
background:white;
position:center;
transform:translate(400px,150px);
}
.pat{
width:300px;
height:300px;
background:pink;
position:center;
transform:translate(850px,-150px);
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a style="color:white;" href="patient.html">Back</a></li>
  <p style="color:white;" class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
      <li><a href="patient_editprofile.html"><span class="glyphicon glyphicon-user"></span> Edit profile</a></li>
      <li><a href="Home.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
</nav>
<center>
<table class="table table-bordered">
<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email'];
	$query = "SELECT Username,Appon_date,problem,Appon_status,Appointment_id from doctor_table,appointment where doctor_table.email=appointment.D_email and appointment.P_email='$email'"; 
	$result = mysqli_query($link,$query);
	echo "<thead>";
     echo "<tr>";
        echo "<th>DOCTOR NAME</th>";
		
        echo "<th>DATE</th>";
        echo "<th>PROBLEM</th>";
     
        echo "<th>STATUS</th>";
		echo "<th>ATTEND</th>";
  echo "</tr>";
    echo "</thead>";
   echo "<tbody>";
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>$row[Username]</td>";
		echo "<td>$row[Appon_date]</td>";
	    echo "<td>$row[problem]</td>";
		echo "<td>$row[Appon_status]</td>";
		if($row['Appon_status']=='ACCEPTED')
			echo "<td><a href='Attend.php?App_id=$row[Appointment_id]'>ATTEND</a></td>";
		else
			echo "<td>SORRY YOU CANNOT ATTEND THE MEETING</td>";
			
		
		
		echo "</tr>";
	}
	echo "</tbody>";
	?>
</table>
</center>
</body>
</html>
