<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<form action="signup2.php" method="post">
	<link rel="stylesheet" href="main.css">
</head>
<body style="background-image:url(images/signup.jpg); background-size: cover">

<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="cover.php" class="w3-bar-item w3-button w3-padding-large w3-white"><marquee>Accident HealthCare System</marquee></a>
  </div>
</div>


	<div class="sucontainer" style="margin-top: 70px; margin-bottom: 40px">
		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full Name" name="fname" required><br>
	
		<label><b>Date of Birth:</b></label><br>
		<input type="date" name="dob" required><br><br>
	
		<label><b>Gender</b></label><br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other<br><br>
		
		<label><b>Contact No:</b></label><br>
		<input type="number" placeholder="Contact Number" name="contact" required><br>
		
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Create Username" name="username" required><br>
		
		<label><b>Email:</b></label><br>
		<input type="email" placeholder="Enter Email" name="email" required><br>

		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pwd" id="p1" required><br>

		<label><b>Repeat Password:</b></label><br>
		<input type="password" placeholder="Repeat Password" name="pwdr" id="p2" required><br>

		<div class="container" style="background-color:grey">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" name="signup" style="float:right">Sign Up</button>
		</div>
  </div>
<?php

function newUser()
{
		include 'dbconfig.php';
		$name=$_POST['fname'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$prepeat=$_POST['pwdr'];
		$sql = "INSERT INTO Patient (Name, Gender, DOB,Contact,Email,Username,Password) VALUES ('$name','$gender','$dob','$contact','$email','$username','$password') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h5>Record created successfully!!</h5>";
		header( "Refresh:3; url=cover.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkusername()
{
	include 'dbconfig.php';
	$usn=$_POST['username'];
	$sql= "SELECT * FROM Patient WHERE Username = '$username'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
		{
			echo"<b><br>Username already exists!!";
		}
		else if($_POST['pwd']!=$_POST['pwdr'])
		{
			echo"Passwords dont match";
		}
		else if(isset($_POST['signup']))
		{ 
			newUser();
		}

	
}
if(isset($_POST['signup']))
{
	if(!empty($_POST['username']) && !empty($_POST['pwd']) &&!empty($_POST['fname']) &&!empty($_POST['dob'])&& !empty($_POST['gender']) &&!empty($_POST['email']) && !empty($_POST['contact']))
			checkusername();
}
?>

</form>
</body>
</html>