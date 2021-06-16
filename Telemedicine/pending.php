<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctorpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
 
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

  .container
  {
  transform:translate(5%,0%);
  }


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  
  <p style="color:white;" class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <li><a style="color:white;" href="<?php
	include 'db.php';
	session_start();     
	    $email = $_SESSION['email'];
        $query = "SELECT vlink FROM doctor_table where email='$email'";
	
	
        $result = mysqli_query($link,$query);
	
        while($row = mysqli_fetch_array($result))
        {
		    echo "$row[vlink]";	
                
			
		
			break;
		}
      
	?>">Meeting room</a></li>
  <li class="dropdown"><a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">profile <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="doctoreditprofile.php">profile</a></li>
          <li><a href="settings.html">settings</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
  </ul>
</nav>
<div class="sidenav">
  <a href="Appointments.php">Appointment</a>
  <a href="Accepted.php">Accepted</a>
  <a href="Rejected.php">Rejected</a>
  <a href="pending.php">Pending</a>
</div>
<div class="container">
           
  <table class="table table-bordered">
   
   
	<?php
	include 'db.php';

	$email = $_SESSION['email'];
	$query = "SELECT Appointment_id,username,weight,gender,problem,previous_medical,Appon_date FROM patient_table,appointment where patient_table.email=appointment.P_email and appointment.D_email='$email' and appointment.Appon_status='NOT seen'";
	$result = mysqli_query($link,$query);
	echo "<thead>";
     echo "<tr>";
        echo "<th>PATIENT NAME</th>";
		
        echo "<th>WEIGHT</th>";
  echo "<th>GENDER</th>";
 echo "<th>PROBLEM</th>";
echo "<th>PREVIOUS MEDICAL DETAILS</th>";
echo "<th>DATE</th>";
echo "<th>ACCEPT/REJECT</th>";
  echo "</tr>";
    echo "</thead>";
   echo "<tbody>";
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>$row[username]</td>";
		echo "<td>$row[weight]</td>";
		echo "<td>$row[gender]</td>";
		echo "<td>$row[problem]</td>";
		echo "<td>$row[previous_medical]</td>";
		echo "<td>$row[Appon_date]</td>";
		echo "<td><a href='Accept.php?App_id=$row[Appointment_id]'>ACCEPT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Reject.php?App_id=$row[Appointment_id]'>REJECT</a></td>";
		
		echo "</tr>";
	}
	echo "</tbody>";
	?>
	
  </table>
</div>


</body>
</html>