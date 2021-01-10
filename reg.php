<?php 
	if(isset($_POST['register']))
	{
		$name=$_POST['uname'];
		$email=$_POST['email'];
		$pass=$_POST['pwd'];
		echo "Username:".$name."<br>";
		echo "Email:".$email."<br>";
		echo "Password:".$pass."<br>";
	}	
?>
<html>
	<head>
		<title>Register Here</title>
	</head>
	<body>
		<h1>Register Here</h1>
			
		<form method="POST" action="">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input name="register" 
					type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
