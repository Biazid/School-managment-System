<?php 

	include "common.php";

	$admin = "Biazid";

	//echo "You are an Admin";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<br>
<br>
  <div >
    <h3> </h3>
  </div>
<?php

	$con = mysqli_connect('localhost','root','');

	if(!$con){
		die("Error in connecting Database ". mysql_error());
	}

	$user = $_REQUEST['username'];
	$pass1 = $_POST['password'];

	$query = "select username from authentication.users where username = '". $user."' and password = '". $pass1 ."' ";

	$result = mysqli_query($con,$query);

	echo "You are an Admin";

	
	
	if(	 mysqli_num_rows($result)>0 ){
		if(isset($_POST['checkbox'])){
    		setcookie('name',$user, time()+(30),"/");
    		setcookie('password',$pass1, time()+(30),"/");
    	}
		echo "Welcome $user :) :)";
		$_SESSION['name']=$user;
		ob_clean();
		//$_SESSION['admin']=$Biazid;

		if($user == $admin){
			$_SESSION['admin']=$Biazid;
			header('location:MY School.php');
		}
		else{
			header('location:MY School.php');
		}
	}

	else{
		echo "Recheck  your username or password :( :(";
	}
ob_flush();
?>
</body>
</html>
