<html>
<head>
 <title>Doctorpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>
 .card-outline-secondary
  {
  width:350px;
height:350px;
top:50%;
left:50%;
position:center;
transform:translate(150%,10%);

  }
  .navbar-inverse
  {
  background-color:skyblue;
  
  }
  body {
  font-family: "Lato", sans-serif;
  background-image: url('bg.jpg');
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

  


  </style>
  <?php 
  include 'db.php';
session_start();

$email = $_SESSION['email'];
$query="select * from doctor_table where email='$email'";
$result = mysqli_query($link,$query);
if($val1 = $result->fetch_assoc())
{
	$phone1=$val1['phone'];
	$Hospital_name1=$val1['Hospital_name'];
$in_time=$val1['In_time'];
$out_time=$val1['Out_time'];
}
$_SESSION['phone'] = $phone1;
$_SESSION['Hospital_name']=$Hospital_name1;	
$_SESSION['In_time']=$in_time;	
$_SESSION['Out_time']=$out_time;	
?>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a style="color:white;" href="Appointments.php">Back</a></li>
  <p style="color:white;" class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <li class="dropdown"><a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">profile <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="doctoreditprofile.php">profile</a></li>
          <li><a href="settings.html">settings</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
      </li>
  </ul>
</nav>
 <div class="card card-outline-secondary">
	<form action="de.php" method="post">
	<p style="color:black;font-size:20px;font-family:cursive;">Phone:
	<input type="text" id="phone" name="phone" placeholder="<?php echo $val1['phone'];?> "></p>
<p style="color:black;font-size:20px;font-family:cursive;">Hospital name:
	<input type="text" id="Hospital_name" name="Hospital_name" placeholder="<?php echo $val1['Hospital_name'];?>"> 
</p>
<p style="color:black;font-size:20px;font-family:cursive;">In time:
	<input type="text" id="In_time" name="In_time" placeholder="<?php echo $val1['In_time'];?>"></p>
<p style="color:black;font-size:20px;font-family:cursive;">Out time:
	<input type="text" id="Out_time" name="Out_time" placeholder="<?php echo $val1['Out_time'];?>"></p>

<button style="color:black;font-size:20px;font-family:cursive;"  id="myBtn">submit</button>
</p>
<script>
  document.getElementById("myBtn").addEventListener("click", function() {
  window.alert("Do you want to submit?");

});

</script>
</div>
</form>
</body>

</html>
