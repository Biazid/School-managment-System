<?php
	
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		die("Error in connecting Database ". mysql_error());
	}
	else{
		//echo "Connected Successfully!!!";
	}

	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass1 = $_POST['password'];
	$pass2 = $_POST['password2'];

	if ($pass1 != $pass2) {
		echo "Password don't match!!!";
	}
	else{
		$query = "insert into authentication.users (username,email,password) values('$user', '$email', '$pass1')";
		$result = mysqli_query($con,$query);

		if($result == False ){
			die("Error in inserting " . mysql_error() );
		}
		else{
			echo "Your record added Successfully!!";
		}
	}


?>