<html>
<?php
session_start();  
  if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header( "Refresh:1; url=../cover.php"); 
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

</head>

<body background="vv.jpg">

<!-- Navbar -->
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
      

<form method="post">
   <button type="submit" name="logout" style="float:right;background-color:#000000">Log Out</button>
  </form>

      <!-- 
   <a href="cover.php" class="w3-bar-item w3-button w3-padding-large " style="margin-left: 950px">Logout</a>
 -->
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>




	

<p>

<center><br><br><br><br><br><br><br><br><br><br><br><br><h1 style="font-size:50px; color:black; font-weight: 1000px; margin-left: 120px; "><b>Welcome ADMIN</b></h1> 

</body>
</html>