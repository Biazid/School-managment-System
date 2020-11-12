<?php include "common.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
<br>
<br>
<div >
	<h1>Register</h1>
</div>
<div style="padding-left: 610px; text-align: center;"> 
<form method="" action="after_reg.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="test" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>	
		</tr>
		<tr>
			<td>Re-type Password:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="Input" type="submit" name="Register_btn" value="Register"></td>
		</tr>
	</table>
</div>
</form>
</body>
</html>