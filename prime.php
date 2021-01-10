<?php 
for($i=2;$i<=30;$i++)
{
	for($j=2;$j<=$i;$j++)
	{
		if($i%$j==0)
		{
			break;
		}
	}
	if($i==$j)
	{
		echo $j."<br>";
	}
}

?>