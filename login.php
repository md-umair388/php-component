<?php 
	session_start();
?>
<html>
	<head>
		<title>Login Here</title>
		<script>
			function validate()
			{
				if(document.getElementById("email").value=="")
				{
					document.getElementById("email").focus();
					document.getElementById("email_error").innerHTML="Email field is required";
					return false;
				}
				else
				{
					var email=document.getElementById("email").value;
					var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/ ;
					if(!filter.test(email))
					{
						document.getElementById("email").focus();
						document.getElementById("email_error").innerHTML="Please Enter Valid Email";
						return false;
					}
				}
				if(document.getElementById("pass").value=="")
				{
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Please Enter Password";
					return false;
				}
			}
			function checkTextBox(x)
			{
				if(x.value!="")
				{
					document.getElementById(x.id+"_error").innerHTML="";
				}
			}
		</script>
		<style>
			.main{
				background-color:#BC8F8F;
				padding:20px;
			}
			h1{
				text-align:center;
				border-bottom:5px solid #1e6a9b;
				color:green;
			}
			input[type='text'],select,
			input[type='password']
			{
				height:35px;
				width:300px;
				border:1px solid #333;
				border-radius:5px;
			}
			textarea{
				height:60px;
				width:300px;
				border:1px solid #333;
				border-radius:5px;
			}
			table tr td{padding:10px;}
			input[type='submit']
			{
				background:green;
				color:#fff;
				padding:10px 25px;
				font-size:18px;
				border:none;
				border-radius:5px;
				box-shadow:2px 2px 5px #333;
			}
			input[type='submit']:hover
			{
				box-shadow:4px 4px 10px #333;
				cursor:pointer;
			}
			span{
				font-size:14px;
				color:Red;
			}
			
		</style>
	</head>
	<body>
		<div class="main">
			
			<h1>Login Here</h1>
			
			<?php 
			
			if(isset($_POST['login']))
			{
				$email=$_POST['email'];
				$pwd=md5($_POST['pass']);
				//COnnect to DB
				include("connect.php");
				
				$result=mysqli_query($con,"select id,email,password,status from form where email='$email'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_assoc($result);
					if($row['password']==$pwd)
					{
						if($row['status']=="Active")
						{
							//redirect to Home Page
							$_SESSION['user_login']=$row['id'];
							header("Location:home.php");
						}
						else
						{
							echo "<p>Please Activate your account</p>";
						}
					}
					else
					{
						echo "<p>Password not matched for the Email</p>";
					}
				}
				else
				{
					echo "<p>Sorry! Email Does not exists</p>";
				}
				
			}
			?>
			
			<center>
			<form method="POST" action="" onsubmit="return validate()">
				<table align="">
				
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" id="email" onblur="checkTextBox(this)">
						<br><span id="email_error"></span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="pass" id="pass" onblur="checkTextBox(this)">
						<br><span id="pass_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"  name="login" value="Login"></td>
				</tr>
			</table>
			</form>
			</center>
		</div>
	</body>
</html>