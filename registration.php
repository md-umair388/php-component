<html>
	<head>
		<title>Registration Form</title>
		<script text="text/javascript">
			function validate()
			{
				//Username
				if(document.getElementById("uname").value=="")
				{
					document.getElementById("uname").focus();
					document.getElementById("uname_error").innerHTML="Username field is required";
					return false;
				}
				//Email	
				if(document.getElementById("email").value=="")
				{
					document.getElementById("email").focus();
					document.getElementById("email_error").innerHTML="Email field is required";
					return false;
				}
				else
				{
					var email=document.getElementById("email").value;
					var filter= /^([a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if(!filter.test(email))
					{
						document.getElementById("email").focus();
						document.getElementById("email_error").innerHTML="Please enter valid email";
						return false;
					}
				}
				//Password
				if(document.getElementById("pass").value=="")
				{
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Password field is required";
					return false;
				}
				//Confirm password
				if(document.getElementById("cpass").value=="")
				{
					document.getElementById("cpass").focus();
					document.getElementById("cpass_error").innerHTML="Confirm password field is required";
					return false;
				}
				else
				{
					var cpass=document.getElementById("cpass").value
					var pass=document.getElementById("pass").value
					if(cpass!=pass)
					{
						document.getElementById("cpass").focus();
						document.getElementById("cpass_error").innerHTML="Confirm password not matched";
						return false;
					}
				}
				//Gender
				
				//Mobile
				if(document.getElementById("mobile").value=="")
				{
					document.getElementById("mobile").focus();
					document.getElementById("mobile_error").innerHTML="Mobile field is required";
					return false;
				}
				else
				{
					var mobile=document.getElementById("mobile").value;
					if(mobile.length!=10)
					{
						document.getElementById("mobile").focus();
						document.getElementById("mobile_error").innerHTML="enter 10 digit mobile";
						return false;
					}
					if(isNaN(mobile))
					{
						document.getElementById("mobile").focus();
						document.getElementById("mobile_error").innerHTML="Please enter valid mobile number";
						return false;
					}
					
				}
				//DOB
					
				//State	
				if(document.getElementById("state").selectedIndex==0)
				{
					document.getElementById("state").focus();
					document.getElementById("state_error").innerHTML="Please select state";
					return false;
				}
				//City	
				if(document.getElementById("city").selectedIndex==0)
				{
					document.getElementById("city").focus();
					document.getElementById("city_error").innerHTML="Please select city";
					return false;
				}	
				//Address
				if(document.getElementById("address").value=="")
				{
					document.getElementById("address").focus();
					document.getElementById("address_error").innerHTML="Address field is required";
					return false;
				}
				//for checkbox
				if(document.getElementById("terms").checked==false)
				{
					document.getElementById("terms").focus();
					document.getElementById("terms_error").innerHTML="Must be checked...!!";
					return false;
				}
			}
			
			//for span when all things is right...
			function checkTextBox(x)
			{
				if(x.value!="")
				{
					document.getElementById(x.id+"_error").innerHTML="";
					return false;
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
					border-bottom:5px solid #1e6aab;
					color:green
			}
			input[type='text'],input[type='password']{
					
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
			table tr td{
						padding:10px;
			}
			input[type='submit']{
					background-color:#757778;
					color:#232324;
					padding:10px 25px 10px 20px;
					font-size:18px
					border:none;
					border-radius:5px;
					box-shadow:2px 3px 5px #333;
			}
			input[type='submit']:hover{
				box-shadow:4px 4px 10px #333;
				cursor:pointer;				
			}
			span{
				font-size:14px;
				color:Red;
			}
			select{
					border:1px solid #333;
					border-radius:5px;
			}
			#state,#city{
					height:35px;
					width:300px;
			}
			#dob_day,#dob_month,#dob_year{
				height:35px
			}
			input::placeholder
			{
				text-align: center;
				font-style: italic; 
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<div class="main">
		<h1 align="center">Application Form</h1>	
			<?php
			{
				if(isset($_REQUEST['status']))
				{
					echo "<p>Account created succefully.Please active your account:</p>";
				}
				if(isset($_POST['submit']))
				{
					$uname=$_POST['uname'];
					$email=$_POST['email'];
					$pwd=md5($_POST['pass']);
					$gender=(isset($_POST['gender'])? $_POST['gender']: "");
					$mobile=$_POST['mobile'];
					$dob=$_POST['dob'];
					$state=$_POST['state'];
					$city=$_POST['city'];
					$addr=$_POST['address'];
					$terms=$_POST['terms'];
					$ip=$_SERVER['REMOTE_ADDR'];
					$con=mysqli_connect("localhost","root","","umair");
					echo mysqli_error($con);
					mysqli_query($con,"insert into form(username,email,password,mobile,gender,dob,city,address,terms,state,ip) values('$uname','$email','$pwd','$mobile','$gender','$dob','$city','$addr','$terms','$state','$ip')");
					
					if(mysqli_affected_rows($con)==TRUE)
					{
						$id=mysqli_insert_id($con);
						$to=$email;
						$subject="Activation Link-GoPHP";
						$message="Hi".$uname."<br/><br/>Thanks for creating an account with us your account details are:<br/><br/>email:Your email<br/>Password:".$_POST['pass']."<br/><br/>To get Access with our website please click the below link to activate your account<br/><br/><a target='_blank' href='http://localhost:100/umair/activate.php?aid='".$id.">Active Now</a><br>/<br/>Thanks<br/>GoPHP";
						$mheaders="content-Type:text/html";
						
						if(mail($to,$subject,$message,$mheaders))
						{
				?>
						<script>
							window.location="registration.php?status=true";
						</script>
				<?php
						}
						else
						{
							echo "<p>Sorry! Unable to send an email.Contact <u>admin</u></p>";
						}
					}
					else
					{
						echo "<p>Sorry! Unable to created an account</p>";
					}
				}
			}
			?>
			<form method="POST" action="" onsubmit="return validate()" name="my_form">
				<table align="center">
					<tr>
						<td>Username*</td>
						<td>	
							<input type="text" name="uname" placeholder=" User name" id="uname" onblur="checkTextBox(this)" /> 
							<br/><span id="uname_error"></span>
						</td>
					</tr>
					<tr>
						<td>Email*</td>
						<td>
							<input type="text" name="email" placeholder=" Enter your email" id="email" onblur="checkTextBox(this)" />
							<br/><span id="email_error"></span>
						</td>
					</tr>
					<tr>
						<td>Password</br></br></td>
						<td>
							<input type="password" name="pass" id="pass" placeholder=" Password" onblur="checkTextBox(this)" />
							<br/><span id="pass_error"></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password</br></br></td>
						<td>
							<input type="password" name="cpass" id="cpass" placeholder=" Confirm password" onblur="checkTextBox(this)" />
							<br/><span id="cpass_error"></span>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" id="gender1" value="Male"/>Male &nbsp;
							<input type="radio" name="gender" id="gender2" value="Female"/>Female &nbsp;
						</td>
					</tr>
					<tr>
						<td>Mobile*</td>
						<td>
							<input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" onblur="checkTextBox(this)" />
							<br/><span id="mobile_error"></span>
						</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>
							<input type="text" name="dob" id="dob" placeholder=" DD/MM/YYYY" onblur="checkTextBox(this)" />
							<br/><span id="dob_error"></span>
						</td>
					</tr>
					<tr>
						<td>State</td>
						<td>
							<select id="state" name="state" onblur="checkTextBox(this)">
								<option value="">-----------------------Select State-----------------------</option>
								<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Lakshadweep">Lakshadweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Pondicherry">Pondicherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttaranchal">Uttaranchal</option>
								<option value="West Bengal">West Bengal</option>
							</select>
							<br><span id="state_error"></span>
						</td>
					</tr>
					<tr>
						<td>City</td>
						<td>
							<select id="city" name="city" onblur="checkTextBox(this)">
								<option value="">------------------------Select City------------------------</option>
								<option value="Adilabad">Adilabad</option>
								<option>Agra</option>
								<option>Ahmedabad</option>
								<option>Ahmednagar</option>
								<option>Aizawl</option>
								<option>Ajitgarh (Mohali)</option>
								<option>Ajmer</option>
								<option>Akola</option>
								<option>Alappuzha</option>
								<option>Aligarh</option>
								<option>Alirajpur</option>
								<option>Allahabad</option>
								<option>Almora</option>
								<option>Alwar</option>
								<option>Ambala</option>
								<option>Ambedkar Nagar</option>
								<option>Amravati</option>
								<option>Amreli district</option>
								<option>Amritsar</option>
								<option>Anand</option>
								<option>Anantapur</option>
								<option>Anantnag</option>
								<option>Angul</option>
								<option>Anjaw</option>
								<option>Anuppur</option>
								<option>Araria</option>
								<option>Ariyalur</option>
								<option>Arwal</option>
								<option>Ashok Nagar</option>
								<option>Auraiya</option>
								<option>Aurangabad</option>
								<option>Aurangabad</option>
								<option>Azamgarh</option>
								<option>Badgam</option>
								<option>Bagalkot</option>
								<option>Bageshwar</option>
								<option>Bagpat</option>
								<option>Bahraich</option>
								<option>Baksa</option>
								<option>Balaghat</option>
								<option>Balangir</option>
								<option>Balasore</option>
								<option>Ballia</option>
								<option>Balrampur</option>
								<option>Banaskantha</option>
								<option>Banda</option>
								<option>Bandipora</option>
								<option>Bangalore Rural</option>
								<option>Bangalore Urban</option>
								<option>Banka</option>
								<option>Bankura</option>
								<option>Banswara</option>
								<option>Barabanki</option>
								<option>Baramulla</option>
								<option>Baran</option>
								<option>Bardhaman</option>
								<option>Bareilly</option>
								<option>Bargarh (Baragarh)</option>
								<option>Barmer</option>
								<option>Barnala</option>
								<option>Barpeta</option>
								<option>Barwani</option>
								<option>Bastar</option>
								<option>Basti</option>
								<option>Bathinda</option>
								<option>Beed</option>
								<option>Begusarai</option>
								<option>Belgaum</option>
								<option>Bellary</option>
								<option>Betul</option>
								<option>Bhadrak</option>
								<option>Bhagalpur</option>
								<option>Bhandara</option>
								<option>Bharatpur</option>
								<option>Bharuch</option>
								<option>Bhavnagar</option>
								<option>Bhilwara</option>
								<option>Bhind</option>
								<option>Bhiwani</option>
								<option>Bhojpur</option>
								<option>Bhopal</option>
								<option>Bidar</option>
								<option>Bijapur</option>
								<option>Bijapur</option>
								<option>Bijnor</option>
								<option>Bikaner</option>
								<option>Bilaspur</option>
								<option>Bilaspur</option>
								<option>Birbhum</option>
								<option>Bishnupur</option>
								<option>Bokaro</option>
								<option>Bongaigaon</option>
								<option>Boudh (Bauda)</option>
								<option>Budaun</option>
								<option>Bulandshahr</option>
								<option>Buldhana</option>
								<option>Bundi</option>
								<option>Burhanpur</option>
								<option>Buxar</option>
								<option>Cachar</option>
								<option>Central Delhi</option>
								<option>Chamarajnagar</option>
								<option>Chamba</option>
								<option>Chamoli</option>
								<option>Champawat</option>
								<option>Champhai</option>
								<option>Chandauli</option>
								<option>Chandel</option>
								<option>Chandigarh</option>
								<option>Chandrapur</option>
								<option>Changlang</option>
								<option>Chatra</option>
								<option>Chennai</option>
								<option>Chhatarpur</option>
								<option>Chhatrapati Shahuji Maharaj Nagar</option>
								<option>Chhindwara</option>
								<option>Chikkaballapur</option>
								<option>Chikkamagaluru</option>
								<option>Chirang</option>
								<option>Chitradurga</option>
								<option>Chitrakoot</option>
								<option>Chittoor</option>
								<option>Chittorgarh</option>
								<option>Churachandpur</option>
								<option>Churu</option>
								<option>Coimbatore</option>
								<option>Cooch Behar</option>
								<option>Cuddalore</option>
								<option>Cuttack</option>
								<option>Dadra and Nagar Haveli</option>
								<option>Dahod</option>
								<option>Dakshin Dinajpur</option>
								<option>Dakshina Kannada</option>
								<option>Daman</option>
								<option>Damoh</option>
								<option>Dantewada</option>
								<option>Darbhanga</option>
								<option>Darjeeling</option>
								<option>Darrang</option>
								<option>Datia</option>
								<option>Dausa</option>
								<option>Davanagere</option>
								<option>Debagarh (Deogarh)</option>
								<option>Dehradun</option>
								<option>Deoghar</option>
								<option>Deoria</option>
								<option>Dewas</option>
								<option>Dhalai</option>
								<option>Dhamtari</option>
								<option>Dhanbad</option>
								<option>Dhar</option>
								<option>Dharmapuri</option>
								<option>Dharwad</option>
								<option>Dhemaji</option>
								<option>Dhenkanal</option>
								<option>Dholpur</option>
								<option>Dhubri</option>
								<option>Dhule</option>
								<option>Dibang Valley</option>
								<option>Dibrugarh</option>
								<option>Dima Hasao</option>
								<option>Dimapur</option>
								<option>Dindigul</option>
								<option>Dindori</option>
								<option>Diu</option>
								<option>Doda</option>
								<option>Dumka</option>
								<option>Dungapur</option>
								<option>Durg</option>
								<option>East Champaran</option>
								<option>East Delhi</option>
								<option>East Garo Hills</option>
								<option>East Khasi Hills</option>
								<option>East Siang</option>
								<option>East Sikkim</option>
								<option>East Singhbhum</option>
								<option>Eluru</option>
								<option>Ernakulam</option>
								<option>Erode</option>
								<option>Etah</option>
								<option>Etawah</option>
								<option>Faizabad</option>
								<option>Faridabad</option>
								<option>Faridkot</option>
								<option>Farrukhabad</option>
								<option>Fatehabad</option>
								<option>Fatehgarh Sahib</option>
								<option>Fatehpur</option>
								<option>Fazilka</option>
								<option>Firozabad</option>
								<option>Firozpur</option>
								<option>Gadag</option>
								<option>Gadchiroli</option>
								<option>Gajapati</option>
								<option>Ganderbal</option>
								<option>Gandhinagar</option>
								<option>Ganganagar</option>
								<option>Ganjam</option>
								<option>Garhwa</option>
								<option>Gautam Buddh Nagar</option>
								<option>Gaya</option>
								<option>Ghaziabad</option>
								<option>Ghazipur</option>
								<option>Giridih</option>
								<option>Goalpara</option>
								<option>Godda</option>
								<option>Golaghat</option>
								<option>Gonda</option>
								<option>Gondia</option>
								<option>Gopalganj</option>
								<option>Gorakhpur</option>
								<option>Gulbarga</option>
								<option>Gumla</option>
								<option>Guna</option>
								<option>Guntur</option>
								<option>Gurdaspur</option>
								<option>Gurgaon</option>
								<option>Gwalior</option>
								<option>Hailakandi</option>
								<option>Hamirpur</option>
								<option>Hamirpur</option>
								<option>Hanumangarh</option>
								<option>Harda</option>
								<option>Hardoi</option>
								<option>Haridwar</option>
								<option>Hassan</option>
								<option>Haveri district</option>
								<option>Hazaribag</option>
								<option>Hingoli</option>
								<option>Hissar</option>
								<option>Hooghly</option>
								<option>Hoshangabad</option>
								<option>Hoshiarpur</option>
								<option>Howrah</option>
								<option>Hyderabad</option>
								<option>Hyderabad</option>
								<option>Idukki</option>
								<option>Imphal East</option>
								<option>Imphal West</option>
								<option>Indore</option>
								<option>Jabalpur</option>
								<option>Jagatsinghpur</option>
								<option>Jaintia Hills</option>
								<option>Jaipur</option>
								<option>Jaisalmer</option>
								<option>Jajpur</option>
								<option>Jalandhar</option>
								<option>Jalaun</option>
								<option>Jalgaon</option>
								<option>Jalna</option>
								<option>Jalore</option>
								<option>Jalpaiguri</option>
								<option>Jammu</option>
								<option>Jamnagar</option>
								<option>Jamtara</option>
								<option>Jamui</option>
								<option>Janjgir-Champa</option>
								<option>Jashpur</option>
								<option>Jaunpur district</option>
								<option>Jehanabad</option>
								<option>Jhabua</option>
								<option>Jhajjar</option>
								<option>Jhalawar</option>
								<option>Jhansi</option>
								<option>Jharsuguda</option>
								<option>Jhunjhunu</option>
								<option>Jind</option>
								<option>Jodhpur</option>
								<option>Jorhat</option>
								<option>Junagadh</option>
								<option>Jyotiba Phule Nagar</option>
								<option>Kabirdham (formerly Kawardha)</option>
								<option>Kadapa</option>
								<option>Kaimur</option>
								<option>Kaithal</option>
								<option>Kakinada</option>
								<option>Kalahandi</option>
								<option>Kamrup</option>
								<option>Kamrup Metropolitan</option>
								<option>Kanchipuram</option>
								<option>Kandhamal</option>
								<option>Kangra</option>
								<option>Kanker</option>
								<option>Kannauj</option>
								<option>Kannur</option>
								<option>Kanpur</option>
								<option>Kanshi Ram Nagar</option>
								<option>Kanyakumari</option>
								<option>Kapurthala</option>
								<option>Karaikal</option>
								<option>Karauli</option>
								<option>Karbi Anglong</option>
								<option>Kargil</option>
								<option>Karimganj</option>
								<option>Karimnagar</option>
								<option>Karnal</option>
								<option>Karur</option>
								<option>Kasaragod</option>
								<option>Kathua</option>
								<option>Katihar</option>
								<option>Katni</option>
								<option>Kaushambi</option>
								<option>Kendrapara</option>
								<option>Kendujhar (Keonjhar)</option>
								<option>Khagaria</option>
								<option>Khammam</option>
								<option>Khandwa (East Nimar)</option>
								<option>Khargone (West Nimar)</option>
								<option>Kheda</option>
								<option>Khordha</option>
								<option>Khowai</option>
								<option>Khunti</option>
								<option>Kinnaur</option>
								<option>Kishanganj</option>
								<option>Kishtwar</option>
								<option>Kodagu</option>
								<option>Koderma</option>
								<option>Kohima</option>
								<option>Kokrajhar</option>
								<option>Kolar</option>
								<option>Kolasib</option>
								<option>Kolhapur</option>
								<option>Kolkata</option>
								<option>Kollam</option>
								<option>Koppal</option>
								<option>Koraput</option>
								<option>Korba</option>
								<option>Koriya</option>
								<option>Kota</option>
								<option>Kottayam</option>
								<option>Kozhikode</option>
								<option>Krishna</option>
								<option>Kulgam</option>
								<option>Kullu</option>
								<option>Kupwara</option>
								<option>Kurnool</option>
								<option>Kurukshetra</option>
								<option>Kurung Kumey</option>
								<option>Kushinagar</option>
								<option>Kutch</option>
								<option>Lahaul and Spiti</option>
								<option>Lakhimpur</option>
								<option>Lakhimpur Kheri</option>
								<option>Lakhisarai</option>
								<option>Lalitpur</option>
								<option>Latehar</option>
								<option>Latur</option>
								<option>Lawngtlai</option>
								<option>Leh</option>
								<option>Lohardaga</option>
								<option>Lohit</option>
								<option>Lower Dibang Valley</option>
								<option>Lower Subansiri</option>
								<option>Lucknow</option>
								<option>Ludhiana</option>
								<option>Lunglei</option>
								<option>Madhepura</option>
								<option>Madhubani</option>
								<option>Madurai</option>
								<option>Mahamaya Nagar</option>
								<option>Maharajganj</option>
								<option>Mahasamund</option>
								<option>Mahbubnagar</option>
								<option>Mahe</option>
								<option>Mahendragarh</option>
								<option>Mahoba</option>
								<option>Mainpuri</option>
								<option>Malappuram</option>
								<option>Maldah</option>
								<option>Malkangiri</option>
								<option>Mamit</option>
								<option>Mandi</option>
								<option>Mandla</option>
								<option>Mandsaur</option>
								<option>Mandya</option>
								<option>Mansa</option>
								<option>Marigaon</option>
								<option>Mathura</option>
								<option>Mau</option>
								<option>Mayurbhanj</option>
								<option>Medak</option>
								<option>Meerut</option>
								<option>Mehsana</option>
								<option>Mewat</option>
								<option>Mirzapur</option>
								<option>Moga</option>
								<option>Mokokchung</option>
								<option>Mon</option>
								<option>Moradabad</option>
								<option>Morena</option>
								<option>Mumbai City</option>
								<option>Mumbai suburban</option>
								<option>Munger</option>
								<option>Murshidabad</option>
								<option>Muzaffarnagar</option>
								<option>Muzaffarpur</option>
								<option>Mysore</option>
								<option>Nabarangpur</option>
								<option>Nadia</option>
								<option>Nagaon</option>
								<option>Nagapattinam</option>
								<option>Nagaur</option>
								<option>Nagpur</option>
								<option>Nainital</option>
								<option>Nalanda</option>
								<option>Nalbari</option>
								<option>Nalgonda</option>
								<option>Namakkal</option>
								<option>Nanded</option>
								<option>Nandurbar</option>
								<option>Narayanpur</option>
								<option>Narmada</option>
								<option>Narsinghpur</option>
								<option>Nashik</option>
								<option>Navsari</option>
								<option>Nawada</option>
								<option>Nawanshahr</option>
								<option>Nayagarh</option>
								<option>Neemuch</option>
								<option>Nellore</option>
								<option>New Delhi</option>
								<option>Nilgiris</option>
								<option>Nizamabad</option>
								<option>North 24 Parganas</option>
								<option>North Delhi</option>
								<option>North East Delhi</option>
								<option>North Goa</option>
								<option>North Sikkim</option>
								<option>North Tripura</option>
								<option>North West Delhi</option>
								<option>Nuapada</option>
								<option>Ongole</option>
								<option>Osmanabad</option>
								<option>Pakur</option>
								<option>Palakkad</option>
								<option>Palamu</option>
								<option>Pali</option>
								<option>Palwal</option>
								<option>Panchkula</option>
								<option>Panchmahal</option>
								<option>Panchsheel Nagar district (Hapur)</option>
								<option>Panipat</option>
								<option>Panna</option>
								<option>Papum Pare</option>
								<option>Parbhani</option>
								<option>Paschim Medinipur</option>
								<option>Patan</option>
								<option>Pathanamthitta</option>
								<option>Pathankot</option>
								<option>Patiala</option>
								<option>Patna</option>
								<option>Pauri Garhwal</option>
								<option>Perambalur</option>
								<option>Phek</option>
								<option>Pilibhit</option>
								<option>Pithoragarh</option>
								<option>Pondicherry</option>
								<option>Poonch</option>
								<option>Porbandar</option>
								<option>Pratapgarh</option>
								<option>Pratapgarh</option>
								<option>Pudukkottai</option>
								<option>Pulwama</option>
								<option>Pune</option>
								<option>Purba Medinipur</option>
								<option>Puri</option>
								<option>Purnia</option>
								<option>Purulia</option>
								<option>Raebareli</option>
								<option>Raichur</option>
								<option>Raigad</option>
								<option>Raigarh</option>
								<option>Raipur</option>
								<option>Raisen</option>
								<option>Rajauri</option>
								<option>Rajgarh</option>
								<option>Rajkot</option>
								<option>Rajnandgaon</option>
								<option>Rajsamand</option>
								<option>Ramabai Nagar (Kanpur Dehat)</option>
								<option>Ramanagara</option>
								<option>Ramanathapuram</option>
								<option>Ramban</option>
								<option>Ramgarh</option>
								<option>Rampur</option>
								<option>Ranchi</option>
								<option>Ratlam</option>
								<option>Ratnagiri</option>
								<option>Rayagada</option>
								<option>Reasi</option>
								<option>Rewa</option>
								<option>Rewari</option>
								<option>Ri Bhoi</option>
								<option>Rohtak</option>
								<option>Rohtas</option>
								<option>Rudraprayag</option>
								<option>Rupnagar</option>
								<option>Sabarkantha</option>
								<option>Sagar</option>
								<option>Saharanpur</option>
								<option>Saharsa</option>
								<option>Sahibganj</option>
								<option>Saiha</option>
								<option>Salem</option>
								<option>Samastipur</option>
								<option>Samba</option>
								<option>Sambalpur</option>
								<option>Sangli</option>
								<option>Sangrur</option>
								<option>Sant Kabir Nagar</option>
								<option>Sant Ravidas Nagar</option>
								<option>Saran</option>
								<option>Satara</option>
								<option>Satna</option>
								<option>Sawai Madhopur</option>
								<option>Sehore</option>
								<option>Senapati</option>
								<option>Seoni</option>
								<option>Seraikela Kharsawan</option>
								<option>Serchhip</option>
								<option>Shahdol</option>
								<option>Shahjahanpur</option>
								<option>Shajapur</option>
								<option>Shamli</option>
								<option>Sheikhpura</option>
								<option>Sheohar</option>
								<option>Sheopur</option>
								<option>Shimla</option>
								<option>Shimoga</option>
								<option>Shivpuri</option>
								<option>Shopian</option>
								<option>Shravasti</option>
								<option>Sibsagar</option>
								<option>Siddharthnagar</option>
								<option>Sidhi</option>
								<option>Sikar</option>
								<option>Simdega</option>
								<option>Sindhudurg</option>
								<option>Singrauli</option>
								<option>Sirmaur</option>
								<option>Sirohi</option>
								<option>Sirsa</option>
								<option>Sitamarhi</option>
								<option>Sitapur</option>
								<option>Sivaganga</option>
								<option>Siwan</option>
								<option>Solan</option>
								<option>Solapur</option>
								<option>Sonbhadra</option>
								<option>Sonipat</option>
								<option>Sonitpur</option>
								<option>South 24 Parganas</option>
								<option>South Delhi</option>
								<option>South Garo Hills</option>
								<option>South Goa</option>
								<option>South Sikkim</option>
								<option>South Tripura</option>
								<option>South West Delhi</option>
								<option>Sri Muktsar Sahib</option>
								<option>Srikakulam</option>
								<option>Srinagar</option>
								<option>Subarnapur (Sonepur)</option>
								<option>Sultanpur</option>
								<option>Sundergarh</option>
								<option>Supaul</option>
								<option>Surat</option>
								<option>Surendranagar</option>
								<option>Surguja</option>
								<option>Tamenglong</option>
								<option>Tarn Taran</option>
								<option>Tawang</option>
								<option>Tehri Garhwal</option>
								<option>Thane</option>
								<option>Thanjavur</option>
								<option>The Dangs</option>
								<option>Theni</option>
								<option>Thiruvananthapuram</option>
								<option>Thoothukudi</option>
								<option>Thoubal</option>
								<option>Thrissur</option>
								<option>Tikamgarh</option>
								<option>Tinsukia</option>
								<option>Tirap</option>
								<option>Tiruchirappalli</option>
								<option>Tirunelveli</option>
								<option>Tirupur</option>
								<option>Tiruvallur</option>
								<option>Tiruvannamalai</option>
								<option>Tiruvarur</option>
								<option>Tonk</option>
								<option>Tuensang</option>
								<option>Tumkur</option>
								<option>Udaipur</option>
								<option>Udalguri</option>
								<option>Udham Singh Nagar</option>
								<option>Udhampur</option>
								<option>Udupi</option>
								<option>Ujjain</option>
								<option>Ukhrul</option>
								<option>Umaria</option>
								<option>Una</option>
								<option>Unnao</option>
								<option>Upper Siang</option>
								<option>Upper Subansiri</option>
								<option>Uttar Dinajpur</option>
								<option>Uttara Kannada</option>
								<option>Uttarkashi</option>
								<option>Vadodara</option>
								<option>Vaishali</option>
								<option>Valsad</option>
								<option>Varanasi</option>
								<option>Vellore</option>
								<option>Vidisha</option>
								<option>Viluppuram</option>
								<option>Virudhunagar</option>
								<option>Visakhapatnam</option>
								<option>Vizianagaram</option>
								<option>Vyara</option>
								<option>Warangal</option>
								<option>Wardha</option>
								<option>Washim</option>
								<option>Wayanad</option>
								<option>West Champaran</option>
								<option>West Delhi</option>
								<option>West Garo Hills</option>
								<option>West Kameng</option>
								<option>West Khasi Hills</option>
								<option>West Siang</option>
								<option>West Sikkim</option>
								<option>West Singhbhum</option>
								<option>West Tripura</option>
								<option>Wokha</option>
								<option>Yadgir</option>
								<option>Yamuna Nagar</option>
								<option>Yanam</option>
								<option>Yavatmal</option>
								<option>Zunheboto</option>
							</select>
							<br><span id="city_error"></span>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<textarea id="address" name="address" placeholder=" Address" onblur="checkTextBox(this)" /></textarea>
							<br/><span id="address_error"></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="checkbox" name="terms" id="terms" onblur="checkTextBox(this)" />Please accept terms and condition
							<br/><span id="terms_error"></span>
						</td>
					</tr>
					<tr>
						<td>
							<td><input type="submit" value="Register" name="submit"/></td>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>