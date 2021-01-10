<html>
	<head>
		<title>Signup Here</title>
		<script>
			function validate()
			{
				if(document.getElementById("uname").value=="")
				{
					alert("Enter Username");
					return false;
				}
				if(document.getElementById("email").value=="")
				{
					alert("Enter Email");
					return false;
				}
			}
		</script>
	</head>
	<body>
		<h1>Signup Here</h1>
		
		<?php 
		if(isset($_POST['signup']))
		{
			//reading data from Form
			$name=$_POST['uname'];
			$email=$_POST['email'];
			$pwd=md5($_POST['pass']);
			//connecto to DB
			$con=mysqli_connect("localhost",
			"root","","7am");
			//Before insert Check tables is 
			//there or not
			//if table not exists go to phpmyadmin 
			//and create a new table
			
			mysqli_query($con,"insert into signup
			(username,email,password)
			values('$name','$email','$pwd')");
			
			if(mysqli_affected_rows($con)==1)
			{
		echo "<p>Account Created Successfully</p>";
			}
			
		}
		?>
		
		
		<form method="POST" action="" 
		onsubmit="return validate()">
			<table>
				<tr>
					<td>Username</td>
					<td><input id="uname" type="text" 
					name="uname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input id="email" type="text" 
					name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input id="pwd" type="password" 
					name="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input id="cpwd" type="password"
					name="cpass"></td>
				</tr>
				<tr>
					<td></td>
					<td><input  type="submit" name="signup" 
					Value="SignUp"></td>
				</tr>
			</table>
		</form>
	</body>
</html>