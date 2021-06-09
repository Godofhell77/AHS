<html>
<head>

	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="adminmain.css"> 
</head>
<body background= "vv.jpg">

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More" style="margin-left:0px">Doctor <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-left: 0px">
        

  <a href="adddoctor.php" class="w3-bar-item w3-button">Add Doctor</a>
      <a href="deletedoctor.php" class="w3-bar-item w3-button">Delete Doctor</a>
      <a href="showdoctor.php" class="w3-bar-item w3-button">Show Doctor</a>
    <a href="showdoctorschedule.php" class="w3-bar-item w3-button">Show Doctor Schedule</a>
    


   
    </div>
</div>
 <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More" style="margin-left:40px" >Clinic <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-left:40px">

      <a href="addclinic.php" class="w3-bar-item w3-button">Add Clinic</a>
      <a href="deleteclinic.php" class="w3-bar-item w3-button">Delete Clinic</a>
      <a href="adddoctorclinic.php" class="w3-bar-item w3-button">Assign Doctor to Clinic</a>
      <a href="addmanagerclinic.php" class="w3-bar-item w3-button">Assign Manager to Clinic</a>
      <a href="deletedoctorclinic.php" class="w3-bar-item w3-button">Delete Doctor from Clinic</a>
      <a href="deletemanagerclinic.php" class="w3-bar-item w3-button">Delete Manager from Clinic</a>
      <a href="showclinic.php"class="w3-bar-item w3-button">Show Clinic</a>

 </div>
</div>

      <div class="w3-dropdown-hover w3-hide-small" >
      <button class="w3-padding-large w3-button" title="More" style="margin-left:55px"> Manager <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-left:55px">
     
      <a href="addmanager.php" class="w3-bar-item w3-button">Add Manager</a>
      <a href="deletemanager.php" class="w3-bar-item w3-button">Delete Manager</a>
      <a href="showmanager.php" class="w3-bar-item w3-button">Show Manager</a>
     
 </div>
</div>
      
<button type="submit" onclick="window.location.href='mainpage.php'" name="logout" style="float:right;background-color:#000000">Back to Admin</button>

  </div>
</div>


<center><h1>ADD MANAGER</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  MID:<input type="number" name="mid" required>
  <br>
  Name: <input type="text" name="name" required>
  <br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  DOB: <input type="date" name="dob" required>
  <br>
  Contact no.: <input type="text" name="contact" maxlength="10" minlength="10" required>
  <br>
  Address: <input type="text" name="address" required>
  <br>
  Username: <input type="text" name="username" required>
  <br>
  Password: <input type="password" name="pwd" required>
  <br>
  Region: <input type="text" name="region" required>
  <br>
  <button type="submit" name="Submit">REGISTER</button>
</form>
</font></b>
</center>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
function newUser()
{
	include 'dbconfig.php';
		$mid=$_POST['mid'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$region=$_POST['region'];
		$sql = "INSERT INTO manager (MID, Name, Gender, DOB,Contact,Address,Username,Password,region) VALUES ('$mid','$name','$gender','$dob','$contact','$address','$username','$password','$region') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h5>Record created successfully!! Refreshing....</h5>";
		header( "Refresh:1; url=addmanager.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkmid()
{
	include 'dbconfig.php';
	$mid=$_POST['mid'];
	$sql= "SELECT * FROM manager WHERE MID = '$mid'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>MID already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		newUser();
	}

	
}
function checkusername()
{
	include 'dbconfig.php';
	$usn=$_POST['username'];
	$sql= "SELECT * FROM manager WHERE Username = '$usn'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>Username already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		checkmid();
	}

	
}
if(isset($_POST['Submit']))
{
	if(!empty($_POST['mid'])&& !empty($_POST['region']) && !empty($_POST['username']) && !empty($_POST['pwd']) &&!empty($_POST['name']) &&!empty($_POST['dob'])&& !empty($_POST['gender']) &&!empty($_POST['address']) && !empty($_POST['contact']))
		checkusername();
	else
		echo "EMPTY VALUES NOT ALLOWED";
}

?>

</body>
</html>