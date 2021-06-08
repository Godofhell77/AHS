<html>

<?php
if(isset($_POST['check']))
{
		include 'dbconfig.php';
		$name=$_SESSION['user'];
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['cancel']))
{
	header( "Refresh:1; url=cancelbookingpatient.php"); 
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=cover.php"); 
}
?>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="main.css">
</head>

<body style="background-image:url(images/cc.jpg)">
			<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"><marquee>Accident HealthCare System</marquee></a>
 
  </div>
<div class="container" style="width:100%">
	<div class="container" style="background-color: transparent;">
	<form method="post">
      <button type="button" onclick="window.location.href='book.php'" style="background-color:#000000">Book Appointment</button>
	  <button type="button" onclick="window.location.href='viewpatientappointments.php'" style="background-color:#000000">Show Appointments</button>
	  <button type="submit" onclick="window.location.href='cancelbookingpatient.php'" name="cancel" style="float:center;background-color:#000000">Cancel Booking</button>
	  <button type="submit" onclick="window.location.href='cover.php'" name="logout" style="float:right;background-color:#000000">Log Out</button>
	</form>
    </div>
</div>

</body>
</html>