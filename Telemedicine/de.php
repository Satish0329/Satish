<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$phone = $_REQUEST['phone'];
	$Hospital_name = $_REQUEST['Hospital_name'];
	$In_time = $_REQUEST['In_time'];
	$Out_time = $_REQUEST['Out_time'];
	if($phone ==null)
		$phone = $_SESSION['phone'];
	if($Hospital_name ==null)
		$Hospital_name = $_SESSION['Hospital_name'];
	    if($In_time ==null)
		$In_time = $_SESSION['In_time'];	
	
	if($Out_time ==null)
		$Out_time = $_SESSION['Out_time'];
	$q = "UPDATE Doctor_table SET phone='$phone', Hospital_name='$Hospital_name', In_time='$In_time',Out_time='$Out_time' WHERE email='$email'";
	$result = mysqli_query($link,$q);
	
        
   	     
	
   
?>
