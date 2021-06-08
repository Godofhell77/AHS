<html>

<?php
session_start();
include 'dbconfig.php';
if(isset($_POST['Submit']))
{
	$cid=$_POST['clinic'];
	$rest=$_POST['doctor'];
	$sql = "DELETE FROM doctor_availability WHERE CID= $cid AND DID= $rest";

	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.Refreshing....";
		header( "Refresh:2; url=deletedoctorclinic.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}

}

if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
?>			



<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="adminmain.css"> 
<script src="jquerypart.js" type="text/javascript"></script>

<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'city='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctorday.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

</script>
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


<center><h1>REMOVE DOCTOR FROM A CLINIC</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label style="font-size:20px" >City:</label>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getState(this.value);">
		<option value="">Select City</option>
		<?php
		include 'dbconfig.php';
		$sql1="SELECT distinct City FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["City"]; ?>"><?php echo $rs["City"]; ?></option>
		<?php
		}
		?>
		</select>
        
	
		<label style="font-size:20px" >Clinic:</label>
		<select id="clinic-list" name="clinic" onchange="getDoctorday(this.value);" >
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Doctor & Time:</label>
		<select name="doctor" id="doctor-list" >
		<option value="">Select Day & Time</option>
		</select>
		
		
		<button name="Submit" type="submit">Submit</button>
	</form>
</body>
</html>