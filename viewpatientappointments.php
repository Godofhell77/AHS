<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<link rel="stylesheet" href="main.css">
<style>
table{
    width: 95%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
	margin-top: 30px;
}

th{
border: 4px solid white;
	background-color: #000000;
    color: white;
	text-align: center;
	font-family: sans-serif;

}
tr,td{
	border: 4px solid whitesmoke;
	background-color: white;
    color: black;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>
<body style="background-image:url(images/cc.jpg)">
<strong><?php session_start(); echo $_SESSION['user']; ?></strong>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="ulogin.php" class="w3-bar-item w3-button w3-padding-large w3-white"><marquee>Accident HealthCare System</marquee></a>
 
  </div>

</div>
<center>
 <?php
	$username=$_SESSION['username'];
	$sql1 = "Select * from book where username ='".$username."' order by DOV desc";
			$result1=mysqli_query($conn, $sql1);  
			echo "<table>
					<tr>
					<th>Appointment-Date</th>
					<th>Name</th>
					<th>Clinic</th>
					<th>Doctor</th>
					<th>Status</th>
					<th>Booked-On</th>
					</tr>";
			while($row1 = mysqli_fetch_array($result1))
			{
				$sql2="SELECT * from doctor where did=".$row1['DID'];
				$result2= mysqli_query($conn,$sql2);
				while($row2= mysqli_fetch_array($result2))
				{
					$sql3="SELECT * from clinic where CID=".$row1['CID'];
						$result3= mysqli_query($conn,$sql3);
						while($row3= mysqli_fetch_array($result3))
						{
								echo "<tr>";
								echo "<td>" . $row1['DOV'] . "</td>";
								echo "<td>" . $row1['Fname'] . "</td>";
								echo "<td>" . $row3['name']."-".$row3['town'] . "</td>";
								echo "<td>" . $row2['name'] . "</td>";
								echo "<td>" . $row1['Status'] . "</td>";
								echo "<td>" . $row1['Timestamp'] . "</td>";
								echo "</tr>";
						}
				}
				
			}
	?>
</center>
</body>
</html>