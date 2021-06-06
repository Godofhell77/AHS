<?php  
 
$con = mysqli_connect('localhost','root');
 
if ($con) {
	echo "Connection Successfull";
}else{
	echo "No connecetion";
}

mysqli_select_db($con, 'webuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comments') ";

mysqli_query($con, $query );

header('location:main.php');



?>