<?php
	if(isset($_FILES['image']))
		{
			if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$file_name=$_FILES['image']['name'];
					$file_size=$_FILES['image']['size'];
					$path=$_FILES['image']['tmp_name'];
					$file_type=$_FILES['image']['type'];
					$extension=array(
										"image/jpeg",
										"image/jpg",
										"image/png",
										"image/gif"
									);					
					if(in_array($file_type,$extension))
						{
							$status=move_uploaded_file($path,"upload/$file_name");
							if($status==1)
								{
									echo "upload succesfully";
								}
							else
								{
									echo "failed";
								}
						}
					else
						{
							echo "not valid image";
						}
				}
			else
				{
					echo "plz select file";
				}
		}		
?>
<html>
	<head>
		<title>Upload</title>
	<head>
	<body>
		<h1>Upload file</h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="image"/>
			<input type="submit" name="submit" value="upload"/>
		</form>
	</body>
</html>