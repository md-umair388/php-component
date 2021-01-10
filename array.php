<pre>
<?php 
$arr=array(
	"state"=>"TS",
	"city"=>"Hyderabad",
	"country"=>"India",
	"pincode"=>500038,
);
//$a1=array_values($arr);
$a1=array_keys($arr);
print_r($a1);









/*$arr=array(10,20,30,40,60);
//for adding multiple elemnets
array_splice($arr,1,0,array(100,200,300));
//for adding single elem
array_splice($arr,1,0,25);
print_r($arr);
*/








//from 3rd position to remaining elem.

//$a1=array_slice($arr,2,3);
//from 2nd position to 3 elems only



//shuffle($arr);
//echo current($arr);

/*
for($i=20;$i<=25;$i++)
{
	$arr[]=$i;
}
print_r($arr);
*/
/*$d=30;
$pos=array_search($d,$arr);
unset($arr[$pos]);
print_r($arr);
*/
/*$a=20;
unset($a);
echo $a;
*/

/*$arr=array(
	"state"=>"TS",
	"city"=>"Hyderabad",
	"country"=>"India",
	"pincode"=>500038,
);*/
//echo array_key_exists("state",$arr);

//echo array_search(50,$arr);


/*
$a1=array(10,20,30,40);
$a2=array(100,200,300,400);
$a3=array(1,2,3,4,5);
$fa=array_merge($a1,$a2,$a3);
print_r($fa);
*/
/*
$arr=array(
	"state"=>"TS",
	"city"=>"Hyderabad",
	"country"=>"India",
	"pincode"=>500038,
);
//ksort($arr);

//rsort($arr);
//sort($arr);
print_r(krsort($arr));
*/



/*
$arr=array(
	"state"=>"TS",
	"city"=>"Hyderabad",
	"country"=>"India",
	"pincode"=>500038,
);
foreach($arr as $key=>$value)
{
	echo $key."=".$value."<br>";
}
*/




/*
$arr=array(
	array(10,20,30),
	array(100,200,300,400),
	array(1,2,3,45,6),
	array('a','s','s','f','f'),
);

$c=count($arr);
for($i=0;$i<$c;$i++)
{
	$ic=count($arr[$i]);
	for($j=0;$j<$ic;$j++)
	{
		echo $arr[$i][$j];
		echo "<br>";
	}
	
}
*/

/*
$arr=array(10,20,30,40,4,3,5,2);
$c=count($arr);

for($i=0;$i<$c;$i++)
{
	echo $arr[$i];
	echo "<br>";
}
*/
/*
$arr=array(
	"state"=>"TS",
	"city"=>"Hyderabad",
	"address"=>array(
		"d.no"=>"27/d",
		"landmark"=>"Nalanda School",
	),
);
print_r($arr['state']);
*/



/*$arr=array(
	array(1,"ram",'ram@mail.com'),
	array(2,"naresh",'nar@mail.com'),
	
);*/



//$arr=array(10,20,array(100,200,300));
//print_r($arr[2][2]);

/*$arr=array(
	true=>1,
	"1"=>1,
	1=>true,
	"1"=>"1"
);
print_r($arr);
*/


?>