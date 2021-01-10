<?php
//echo date("Y");//2018
//echo date("y");//18
/*echo date("m");//06
echo date("M");//Jun
echo date("F");//June
echo date("n");//6
*/
/*
echo date("d");
echo date("D");
echo date("l");
echo date("j");
*/

//2018-06-15

/*echo date("Y-m-d");
echo "<br>";
echo date("d-m-Y");
echo "<br>";
echo date("m-d-Y");
*/
//15-june-2018
//echo date("d-M-Y");
//Friday,15th June 2018
//echo date("l, dS F Y");

//echo date("h:i:s a");

//echo date_default_timezone_get();
date_default_timezone_set("Asia/Calcutta");
//date_default_timezone_set("America/new_york");
//date_default_timezone_set("Pacific/Auckland");
//date_default_timezone_set("Asia/Karachi");
//date_default_timezone_set("Europe/London");
//echo date("Y-m-d h:i:s a");
//echo date("g:i:s a");


//echo date("l,dS F Y, h:i:sa");
//Friday, 15th June 2018, 10:10:00Am

//echo time();//

//echo date("Y-m-d h:i:s a",1429031720);
//echo strtotime();

//echo strtotime("-3 days");
/*echo date("Y-m-d h:i:s a",
strtotime("-3 days 4 years"));*/

$dob="25-07-1987";
echo date("l",strtotime($dob));




















?>