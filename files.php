<?php 

$dir=opendir("images");

while($file=readdir($dir))
{
	if(!($file =="." || $file==".."))
	{
		$ext=substr($file,strpos($file,"."));
		$arr=array(".jpg",".png",".gif");
		if(in_array($ext,$arr))
		{
			echo $file."<br>";
		}
		/*if($ext==".jpg" || $ext==".png" || $ext==".gif")
		{
			echo $file."<br>";
		}*/
	}
	
}

/*$folder="css";
if(file_exists($folder))
{
	rmdir($folder);
	echo $folder." is Deleted";
	
}
else
{
	echo $folder." is Not Avaliable";
}*/



/*$file="welcome.txt";
if(file_exists($file))
{
	unlink($file);
	echo $file." is Deleted Successfully";
}
else
{
	echo $file." is not found";
}
*/


//ho unlink("hello.txt");

//echo file_exists("hello.txt");//1
//echo is_file("files.php");//1
//echo file_get_contents("http://localhost:100/7am_old/register.php");

//echo file_put_contents("hello.odt","hellooooo");

//$fp=fopen("http://localhost:100/7am_old/register.php","r");
//echo fread($fp,10000);





/*for(;$line=fgets($fp);)
{
	echo $line;
	echo "<br>";
}
//var_dump($line);
while($line=fgets($fp))
{
	echo $line."<br>";
}*/







//$xy=fopen("test.txt","a");
//echo fwrite($xy,"html wordpress php mysql");
//$size=filesize("hello.txt");
//echo fread($xy,$size);


?>