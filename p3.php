<?php session_start();?>

<form method="POST" action="p4.php">
	Number3:<input type="text" name="no3">
	<input type="submit" value="Go">
</form>
	
<?php 
$_SESSION['number2']=$_POST['no2'];
//setcookie("number2",$_POST['no2']);
?>