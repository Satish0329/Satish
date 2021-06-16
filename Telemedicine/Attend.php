<?php
	include 'db.php';
	session_start();     
	    $email = $_SESSION['email'];
		$App_id = $_GET['App_id'];
        $query = "SELECT vlink FROM doctor_table,appointment where appointment.D_email=doctor_table.email and Appointment_id=$App_id";
	
	
        $result = mysqli_query($link,$query);

        while($row = mysqli_fetch_array($result))
        {
		    header("Location: $row[vlink]");
                
			
		
			break;
		}
      
	?>