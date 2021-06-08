<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="adminmain.css"> 
<style>
table{
    width: 75%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #000000;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}
</style>

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



<center><br><br><br><h1 style="font-size:70px; background-color:black;color:white;">SHOW CLINIC</h1><hr>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
$con = mysqli_connect('localhost','root','','wt_database');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM clinic order by City,Town,CID ASC";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>CID</th>
<th>Name</th>
<th>Address</th>
<th>Town</th>
<th>City</th>
<th>Contact</th>
<th>MID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['cid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['town'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['mid'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>