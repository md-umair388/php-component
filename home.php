<?php 
session_start();
if(isset($_SESSION['user_login']))
{
?>
	<h1>Welcome to Home<h1>
<?php	
}
else
{
	header("Location:Login.php");
}

?>

