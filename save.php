<?php 
//print_r($_GET);
/*$name=$_GET['uname'];
$em=$_GET['email'];
$pass=$_GET['pwd'];
*/

/*$name=$_POST['uname'];
$em=$_POST['email'];
$pass=$_POST['pwd'];
*/
$name=$_REQUEST['uname'];
$em=$_REQUEST['email'];
$pass=$_REQUEST['pwd'];


echo "Username:".$name."<br>";
echo "Email:".$em."<br>";
echo "Password:".$pass."<br>";

?>