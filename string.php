<?php 

$str="HeLLo World";
//echo strlen($str);
//echo strtolower($str);
//echo strtoupper($str);
//$name="ram babburi";
//echo ucwords($name);
//echo ucfirst($name);

/*$name="<h1 style='color:red'>
ram babburi</h1>";
echo strip_tags($name);
*/
/*
$pwd="ram@123";
echo base64_encode($pwd);

$c="cmFtQDEyMw==";
echo base64_decode($c);
*/

//echo strrev("hello");
/*$name="abc";
echo str_shuffle($name);
*/

//echo ord("");
//echo chr(65);

/*$email='rambabburi@gmail.com';
$len=strlen($email);
for($i=0;$i<$len;$i++)
{
	
	if($email{$i}=='a')
	{
		echo $email{$i}." is At $i<br>";
	}
	
}
*/

//echo stripos($email,"gMAIL");

$str="This program is free 
software; you can redistribute
 it and/or modify it under 
 the terms of the GNU General
 Public License as published 
 by the Free Software 
 Foundation; either version 2 of the License, or (at your option) 
any later version.";

//echo substr($str,0,50);
/*it will give the substring
from 0 position to 50 
characters
*/
//echo substr($str,100);
/*
it returns a substring from
100th position
*/

//implode() and explode()

/*$str="10@20@30@45";
$arr=explode("@",$str);
print_r($arr);
*/
/*$arr=array(10,20,30,40);
echo implode("#",$arr);
*/
/*echo "<pre>";
$str="'ram','hi'";
$arr=explode("",$str);
print_r($arr);
*/
//echo addslashes("ram's");
/*$name="ram\'s";
echo stripslashes($name);
*/

/*$str="<a href=''>Click</a>";
$fp=fopen("hi.txt","w");
echo fwrite($fp,htmlspecialchars($str));
*/
//html_entity_decode()

echo html_entity_decode("&lt;a href=''&gt;Click&lt;/a&gt;");







//echo sha1($pwd);
//echo crc32($pwd);
//echo md5($pwd);







?>