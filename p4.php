<?php 
session_start();

$n1=$_SESSION['number1'];
$n2=$_SESSION['number2'];

$n3=$_POST['no3'];
$sum=$n1+$n2+$n3;
echo "The Sum is:".$sum;
?>