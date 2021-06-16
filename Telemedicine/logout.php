<?php
	include 'db.php';
session_start();
$email=$_SESSION['email'];
$q = "UPDATE doctor_table SET Logged_in=0 WHERE email='$email'";
mysqli_query($link,$q);
session_unset();
session_destroy();
header('Location: http://localhost/remote_health_care/Home.html');
?>