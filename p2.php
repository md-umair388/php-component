<?php session_start();?>

<form method="POST" action="p3.php">
	Number2:<input type="text" name="no2">
	<input type="submit" value="Go">
</form>
	

<?php 
$_SESSION['number1']=$_POST['no1'];
//setcookie("number1",$_POST['no1']);
?>