<?php 
ob_start();
session_start();
$con = mysqli_connect('localhost','root','');
	if(!$con){
		die("Error in connecting Database ". mysql_error());
	}
	else{
		//echo "Connected Successfully!!!";
	}

	$id = $_POST['id'];
	$heading = $_POST['head'];
	$n = $_POST['brief'];
	
		$query = "insert into authentication.users (id,head,brief) values('$id', '$heading', '$n')";
		$result = mysqli_query($con,$query);	
?>