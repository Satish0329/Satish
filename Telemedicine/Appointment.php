<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$em = $_GET['Appoint'];
	$date=$_SESSION['date'];		
	$q="Insert into Appointment(D_email,P_email,Appon_date) values('$em','$email','$date')";
	if(mysqli_query($link,$q)){
   	     	echo "inserted";
	}
        else{
    	    	echo "Error";
        }
?>
