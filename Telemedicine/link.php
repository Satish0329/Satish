<?php
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
      
	?>