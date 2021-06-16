<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$App_id = $_GET['App_id'];		
	$q="update appointment set Appon_status='ACCEPTED' where Appointment_id=$App_id";
	if(mysqli_query($link,$q)){
   	     	echo "Appointment Accepted";
	}
        else{
    	    	echo "Error";
        }
?>
