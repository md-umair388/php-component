<html>
	<head>
		<title>Register Here</title>
		<script>
			function validate()
			{
				if(document.getElementById("uname").value=="")
				{
					//alert("Enter Username");
					document.getElementById("uname").focus();
					document.getElementById("uname_error")
					.innerHTML="Username field is required";
					return false;
				}
				if(document.getElementById("email").value=="")
				{
					//alert("Enter email");
					document.getElementById("email").focus();
					document.getElementById("email_error")
					.innerHTML="Email field is required";
					return false;
				}else
				{
					var email=document.getElementById("email").value;
					var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/ ;
					if(!filter.test(email))
					{
						document.getElementById("email").focus();
						document.getElementById("email_error")
						.innerHTML="Please Enter Valid Email";
						return false;
					}
				}
				if(document.getElementById("pass").value=="")
				{
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Please Enter Password";
					return false;
				}
				if(document.getElementById("cpass").value=="")
				{
					//alert("Enter Username");
					document.getElementById("cpass").focus();
					document.getElementById("cpass_error").innerHTML="Confirm Password is required";
					return false;
				}
				if(document.getElementById("cpass").value!=document.getElementById("pass").value)
				{
					//alert("Enter Username");
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Passwords not matched";
					return false;
				}
				if(document.getElementById("mobile").value=="")
				{
					//alert("Enter Username");
					document.getElementById("mobile").focus();
					document.getElementById("mobile_error")
					.innerHTML="Mobile is required";
					return false;
				}
				else
				{
					var mobile=document.getElementById("mobile").value;
					if(mobile.length!=10)
					{
						document.getElementById("mobile").focus();
						document.getElementById("mobile_error")
						.innerHTML="Please enter 10 digit mobile";
						return false;
					}
					else if(isNaN(mobile))
					{
						document.getElementById("mobile").focus();
						document.getElementById("mobile_error")
						.innerHTML="Valid Mobile required";
						return false;
					}
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
				background:#efefef;
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
			
			<h1>Register Here</h1>
			<?php 
			if(isset($_REQUEST['status']))
			{
				echo "<p>Account created 
				successfully. Please activate 
				your account</p>";
			}
			?>
			<?php 
			if(isset($_POST['register']))
			{
				$name=$_POST['uname'];
				$email=$_POST['email'];
				$pwd=md5($_POST['pass']);
				$mobile=$_POST['mobile'];
				$gender=(isset($_POST['gender'])? $_POST['gender']: "");
				$terms=(isset($_POST['terms'])? $_POST['terms']: "");
				$dob=$_POST['dob'];
				$addr=$_POST['address'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$ip=$_SERVER['REMOTE_ADDR'];
				
				$con=mysqli_connect("localhost","root","","7am");
				
				mysqli_query($con,"insert into 
					register(username,
					email,password,mobile,gender,
					dob,city,address,terms,state,ip) 
					values('$name','$email','$pwd','$mobile',
					'$gender','$dob','$city','$addr','$terms',
					'$state','$ip')");
				if(mysqli_affected_rows($con)==1)
				{
					$id=mysqli_insert_id($con);
					$to=$email;
					$subject="Activation Link-GoPHP";
					$message="Hi ".$name.",<br><br>Thanks for
					creating an account with us.your account 
					details are:<br><br>email:your email<br>
					password:".$_POST['pass']."<br><br>TO get 
					Access with our website please click the 
					below link to 
					activate your account<br><br>
					<a target='_blank' href='http://localhost:100/7am/activate.php?aid=".$id."'>Activate Now</a>
					<br><br>Thanks<br>GoPHP";
					$mheaders="Content-Type:text/html";
					if(mail($to,$subject,$message,$mheaders))
					{
						header("Location:register.php?status=true");
					}
					else
					{
						echo "<p>Sorry! Unable to send an email.
						Contact Admin</p>";
					}
				}
				else
				{
					echo "<p>Sorry! Unable to Create an 
					account</p>";
				}
			}
			?>
			<form method="POST" action="" 
			onsubmit="return validate()">
				<table align="center">
				<tr>
					<td>Username*</td>
					<td>
						<input type="text" name="uname" 
						id="uname" onblur="checkTextBox(this)">
						<br><span id="uname_error"></span>
					</td>
				</tr>
				<tr>
					<td>Email*</td>
					<td>
						<input type="text" name="email"
						id="email" onblur="checkTextBox(this)">
						<br><span id="email_error"></span>
					</td>
				</tr>
				<tr>
					<td>Password*</td>
					<td>
						<input type="password" name="pass"
						id="pass" onblur="checkTextBox(this)">
						<br><span id="pass_error"></span>
					</td>
				</tr>
				<tr>
					<td>Confirm Password*</td>
					<td>
						<input type="password" name="cpass"
						id="cpass" onblur="checkTextBox(this)">
						<br><span id="cpass_error"></span>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender"
						id="gender1" value="male">Male &nbsp;
						<input type="radio" name="gender" 
						id="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<td>Mobile*</td>
					<td>
						<input type="text" name="mobile" 
						id="mobile" onblur="checkTextBox(this)">
						<br><span id="mobile_error"></span>
					</td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="text"  name="dob" 
					id="dob"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea id="address" name="address">
					</textarea></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text"  name="city" 
					id="city"></td>
				</tr>
				<tr>
					<td>State</td>
					<td>
						<select id="state" name="state">
							<option value="">--Select State--</option>
							<option value="Andhrapradesh">Andhrapradesh</option>
							<option value="Telangana">Telangana</option>
							<option value="Maharastra">Maharastra</option>
							<option value="Uttarapradesh">Uttarapradesh</option>
							<option value="Madhyapradesh">Madhyapradesh</option>
							<option value="Goa">Goa</option>
							<option value="Tamilnadu">Tamilnadu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox"  name="terms" 
					id="terms" value="1">Please accept terms and 
					conditions</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"  name="register" 
					value="Register"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>