<!DOCTYPE html>

<?php
session_start();
$error=''; 
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
	include 'dbconfig.php';
	$username=$_POST['uname'];
	$password=$_POST['psw'];

	$query = mysqli_query($conn,"select * from patient where password='$password' AND username='$username'");
	$rows = mysqli_fetch_assoc($query);
	$num=mysqli_num_rows($query);
	if ($num == 1) {
		$_SESSION['username']=$rows['username'];
		$_SESSION['user']=$rows['name'];
		header( "Refresh:1; url=ulogin.php"); 
	} 
	else 
	{
		$error = "Username or Password is invalid";
	}
	mysqli_close($conn); 
}
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
<body style="background-color: white;">

			<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="main.php" class="w3-bar-item w3-button w3-padding-large w3-white">Accident HealthCare System</a>
 
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
 
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center w3-image" style="padding:128px 16px">
  <img src="images/logo.png" style="width: 10%; margin-top: -120px">
  <h1 class="w3-margin w3-jumbo">ACCIDENT HEALTHCARE SYSTEM</h1>
  <button onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:70%;left:46%">Login</button>
</header>

<div class="w3-row">
  <div class="w3-col w3-left w3-container " style="width:100px"></div>
  <div class="w3-col w3-right w3-container " style="width:100px"></div>
  <div class="w3-rest w3-container "><p>
  		<ul style="position:absolute;top:110%;margin-left : 450px;background-color:black">
					<li ><a href="admin/alogin.php" >Admin Login</a></li>
				</ul>
				<ul style="position:absolute;top:110%;margin-left : 990px;background-color:black">
					<li><a href="admin/mlogin.php">Manager Login</a></li>
				</ul>
  </p></div>
</div>
<br>



<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="cover.php">
    <div class="imgcontainer">
		<span style="float:left"><h2>&nbsp&nbsp&nbsp&nbspLog In</h2></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="login">Login</button>
		
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Don't have one?</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup2.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
    </div>

	<div class="imgcontainer">
      <img src="images/steps.jpg" alt="Avatar" class="avatar">
    </div>
	
    <div class="container">
		<p style="text-align:center;font-size:18px;"><b>Sign Up -> Choose your Dates -> Book your visit</b></p>
      <p style="text-align:center"><b>Booking an appointment has never been easier!</b></p>
      <p style="text-align:center"><b>The 3 steps for an easier and healthy life</b></p>
	  
    </div>
	
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
	  <button type="submit" name="signup" style="float:right">Sign Up</button>
    </div>
	
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>

</body>
</html>
