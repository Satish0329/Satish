<?php
	include 'db.php';
	session_start();     
	$email = $_POST['umail'];
	$pass = $_POST['pwd'];
	$_SESSION["email"] = $email;
	$_SESSION["password"] = $pass;
        $query = "SELECT email,password FROM doctor_table";
	$flag = 1;
	
        $result = mysqli_query($link,$query);
	
        while($row = mysqli_fetch_array($result))
        {
                
		if(($row['email']==$email)&&($row['password']==$pass)){
			echo "Logged Sucessfully!";
			$q = "UPDATE doctor_table SET Logged_in=1 WHERE email='$email'";
			mysqli_query($link,$q);
			header("Location: http://localhost/remote_health_care/Appointments.php");
			$flag=0;
			break;
		}
        }
	if($flag==1){
		echo "Invalid UserId or password";
		header("Location: http://localhost/remote_health_care/DoctorLogin.html");
	}
?>

