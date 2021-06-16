<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$em = $_GET['Appoint'];
	$problem1=$_SESSION['prob'];
	$date = date('Y-m-d');
	//echo "$date";
	echo "$problem1";
	$q="Insert into appointment(D_email,P_email,problem) values('$em','$email','$problem1')";
	if(mysqli_query($link,$q)){
   	     	echo "inserted";
	}
        else{
    	    	echo "Error";
        }
?>
