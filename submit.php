<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['comment'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$comment=mysqli_real_escape_string($con,$_POST['comment']);

	$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
	 "Country:".$result->country.'<br/>';
	 "Region:".$result->regionName.'<br/>';
	 "City:".$result->city.'<br/>';
	if(isset($result->lat) && isset($result->lon)){
		 "Lat:".$result->lat.'<br/>';
		 "Lon:".$result->lon.'<br/>';
	}
	 "IP:".$result->query.'<br/>';
	
	mysqli_query($con,"insert into contact_us(name,email,mobile,comment) values('$name','$email','$mobile','$comment')");
	$msg="Thank you for your Response we are sending help immediately.";

	
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr><tr><td>Region</td><td>$result->regionName</td></tr><tr><td>City</td><td>$result->city</td></tr><tr><td>Latitude</td><td>result->lat</td></tr><tr><td>Longitude</td><td>result->lon</td></tr></table> ";


	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="accidenthealthcaresystem@gmail.com";
	$mail->Password="Admin@123";
	$mail->SetFrom($email);
	$mail->addAddress("accidenthealthcaresystem@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
}
?>





