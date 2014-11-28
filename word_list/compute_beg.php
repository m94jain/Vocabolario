<?php
session_start();
$i=$_GET['i'];// session value for selected page 

$j=$_SESSION['goingfrom'];	//current page



if($i>$j)	//if u want to go forward
{
	$s=$_SESSION['start'];
	$s=$s+(($i-$j)*10);
	$_SESSION['start']=$s;
	$e=$_SESSION['end'];
	$e=$e+(($i-$j)*10);
	$_SESSION['end']=$e;
}

else 
{
	if($i<$j)	//backward
	{
		$s=$_SESSION['start'];
		$s=$s-(($j-$i)*10);
		$_SESSION['start']=$s;
		$e=$_SESSION['end'];
		$e=$e-(($j-$i)*10);
		$_SESSION['end']=$e;

	}
}
header("Location:beginner_look.php");


?>