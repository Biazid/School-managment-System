<?php include "common.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >

 	<br>
 	<br>
	<div align="center"><h2>Login</h2></div>
<div style="padding-left: 680px; text-align: center;"> 	
<form id="login" method="post" action="login.php">
	<table id="logintab">
	
	 <tr>
		<td>
			Username:
		</td>
		<br>
		<td><input class="textInput" type="text" name="username" class="inputText" placeholder="Username" id="name1" required></td>
	 </tr>

	 <tr>
		<td>
			Password:
		</td>
		<br>
		<td><input class="textInput" type="Password" name="password" class="inputText" placeholder="Password" required></td>
	 </tr>

	 <tr>
		<td>
		</td>
		<br>
		<td><input type="checkbox" name="checkbox"> Remember me</td>
	 </tr>

	 <tr>
		<td>
			
		</td>
		<td><input class="Input" type="submit" name="loginbtn" value="Login"></td>
	 </tr>
	</table>
	</form>
</div>
</body>
</html>