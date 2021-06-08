<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">

</head>
<body style="background-image:url(vv.jpg)">

	<form action="mlogin.php" method="post">
	
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"><marquee>Accident HealthCare System</marquee></a>
 
  </div>

	</div>
	<div class="sucontainer">
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-color:grey">
			<button type="submit" name="submit" style="float:right" background-color:#000000>Log In</button>
		</div>
<?php 
function SignIn() 
{ 
include 'dbconfig.php';

session_start();
if(!empty($_POST['uname']))  
{ 
	$query = mysqli_query($conn,"SELECT * FROM manager where username = '$_POST[uname]' AND password = '$_POST[pass]'");
	$row = mysqli_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password'])) 
	{ 
		$_SESSION['username'] = $row['username'];
		$_SESSION['mgrname']=$row['name'];
		$_SESSION['mgrid']=$row['mid'];
		echo "Logging you in..";
		header( "Refresh:3; url=mgrmenu.php");
	} 
	else 
	{ 
		echo "Wrong Credentials!"; 
	} 
	}
} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>
</body>
</html>