<html>
	<head>
		<title>Users List</title>
		<style>
			.container{
				width: 800px;
				border:1px solid;
				margin: 0px auto;
				padding:20px;
			}
			table{
				border-collapse:collapse;
			}
			table tr{
				border:1px solid;
			}
			table td,th{
				border:1px solid;
				padding:10px;
			}
			tr:nth-child(even){
				background:#efefef;
			}
			
			tr:nth-child(odd){
				background:#fff;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<center>
				<h1>Users List</h1>
			</center>
			<?php 
				$con=mysqli_connect("localhost",
				"root","","7am") or die("Sorry! Unable to Connect");
				
				$result=mysqli_query($con,
				"select *from users");
				if(mysqli_num_rows($result))
				{
					?>
						<table align="center">
							<tr>
								<th>Id</th>
								<th>Username</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>City</th>
								<th>Pincode</th>
							</tr>
							<?php 
							while($row=mysqli_fetch_object($result))
							{
								?>
								<tr>
									<td><?php echo $row->id; ?></td>
									<td><?php echo $row->username; ?></td>
									<td><?php echo $row->email ?></td>
									<td><?php echo $row->mobile; ?></td>
									<td><?php echo $row->city; ?></td>
									<td><?php echo $row->pincode; ?></td>
									
								</tr>
								<?php
							}
							?>
							
						</table>
					<?php
				}
				else
				{
					echo "<p>Sorry! No Records Found</p>";
				}
			?>
			
		</div>
	</body>
</html>