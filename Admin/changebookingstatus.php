<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>
<style>
table{
    width: 80%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 1px;
	font-size: 25px;
	margin-left: 80px;
	margin-bottom: 30px;
}

th{
border: 1px solid whitesmoke;
	background-color: black;
    color: white;
	text-align: center;
}
tr,td{
	border: 1px solid whitesmoke;
	background-color: white;
    color: black;
}
</style>

<body style="background-image:url(vv.jpg)">
	<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="mgrmenu.php" class="w3-bar-item w3-button w3-padding-large w3-white"><marquee>Accident HealthCare System</marquee></a>
 
  </div>
	<form action="changebookingstatus.php" method="post">
	<div>
		
		<label style="font-size:20px; color:black;margin-left:40px; margin-top: 0px"><b>Doctor:</b></label><br>
		<select name="doctor" id="doctor-list" class="demoInputBox" style="width:30%;height:35px;border-radius:12px;margin-left:40px">
		<option value="" >Select Doctor</option>
		<?php
		session_start();
		$mid=$_SESSION['mgrid'];
		$sql1="SELECT * FROM doctor where did in(select did from doctor_availability where cid in (select cid from manager_clinic where mid=$mid));";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["did"]; ?>"><?php echo "Dr. ".$rs["name"]; ?></option>
		<?php
		}
		?>
		</select> 
        <br><br>
		<label style="font-size:20px; color:black;margin-left:40px"><b>Date:</b></label><br>
		<input type="date" name="dateselected" style="margin-left:40px;width: 30%;border-radius:12px "required ><br>
			<button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
			</form>
<?php
if(isset($_POST['submit']))
{
		
		include 'dbconfig.php';
		$did=$_POST['doctor'];
		$cid=1;
		$dateselected=$_POST['dateselected'];
		$sql1 = "SELECT * FROM book WHERE DOV='". $_POST['dateselected']."' AND DID= $did AND CID= $cid order by Timestamp ASC";
		 $results1=$conn->query($sql1); 
			require_once("dbconfig.php");
?>			
				<form action="changebookingstatus.php" method="post">; 
				<table>
				<tr>
				<th>UserName</th>
				<th>First Name</th>
				<th>DOB</th>
				<th>Timestamp</th>
				<th>Status</th>
				</tr>
<?php
			while($rs1=$results1->fetch_assoc())
			{
				echo "<tr>";
					echo'<td><input type="text" name="username[]" id="username" value="'.$rs1["Username"].'" readonly></td>'
					.'<td><input type="text" name="fname[]" id="fname" value="'.$rs1["Fname"].'" readonly></td>'
					.'<td><input type="date" name="dov[]" id="dov" value="'.$rs1["DOV"].'" readonly></td>'
					.'<td><input type="text" name="timestamp[]" id="timestamp" value="'.$rs1["Timestamp"].'" readonly></td>'
					.'<td><input type="text" name="status[]" id="status" value="'.$rs1["Status"].'"></td></tr>';
			}
?>		
			</table>	
			<button type="submit" style="position:center" name="submit2" value="Submit">Submit Changes</button></form>		
<?php
}
require_once("dbconfig.php");
			if(isset($_POST['submit2']))
		{
			$usrnm=$_POST["username"];
			$fnm=$_POST["fname"];
			$tmstmp=$_POST["timestamp"];
			$stts=$_POST["status"];
			$dt=$_POST["dov"];
			$n=count($usrnm);
			for($j=0;$j<$n;$j++)
			{	
				$updatequery="update book set Status='$stts[$j]' where username='$usrnm[$j]' and timestamp='$tmstmp[$j]'";
				if (mysqli_query($conn, $updatequery)) 
				{
							echo "$fnm[$j] :Status updated successfully..!!<br>";

				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			header( "Refresh:1; url=changebookingstatus.php");
				
		}
?>
	
</body>
</html>