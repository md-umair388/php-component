<html>
<head>
<title> Prime Number </title>
</head>
<body>
<?php
for($n=1;$n<100;$n++)
{
	$c=0;
	for($i=2;$i<=($n/2);$i++)
	{
		if($n%$i==0)
		{
			$c=1;
			break;
		}
	}
}
if($c==0)
{
	echo $n," ";
}

?>
</body>
</html>