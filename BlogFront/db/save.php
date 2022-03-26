<?php
	include 'db.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	$message=$_POST['message'];
	$subject=$_POST['subject'];
	$sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `subject`, `message`') 
	VALUES ('$name','$email','$phone', $subject, $message)";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>