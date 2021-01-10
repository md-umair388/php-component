<html>
	<head>
		<title>Multiple File Uploading</title>
	</head>
	<body>
		<h1>Multiple File Uploading</h1>
		
		<?php 
		if(isset($_POST['upload']))
		{	
			$c=count($_FILES['image']['name']);
			for($i=0;$i<$c;$i++)
			{
				if(is_uploaded_file($_FILES['image']['tmp_name'][$i]))
				{
					$filename=$_FILES['image']['name'][$i];
					$type=$_FILES['image']['type'][$i];
					$size=$_FILES['image']['size'][$i];
					$path=$_FILES['image']['tmp_name'][$i];
					
					$types=array(
						"image/jpg",
						"image/png",
						"image/gif",
						"image/jpeg",
						);
					if(in_array($type,$types))
					{
						$status=move_uploaded_file($path,
						"uploads/$filename");
						if($status==1)
						{
							echo "<p>$filename is Uploaded 
							Successfully</p>";
						}
						else
						{
							echo "sorry! Unale to Uplod. 
							Try Again";
						}
					}
					else
					{
						echo "<P>$filename is not a  
						Valid Image</p>";
					}

				}
				else
				{
					echo "Please select a File";
				}
			}
			
		}
		?>
		
		
		<form method="POST" action="" 
		enctype="multipart/form-data">
			Upload File:
		<input multiple type="file" name="image[]">	
		<input type="submit" value="Upload"
		name="upload">
		</form>
	</body>
</html>