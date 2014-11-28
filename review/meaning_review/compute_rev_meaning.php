<?php
session_start();
$i=$_GET['i'];// session value for selected page 

$j=$_SESSION['goingfrom'];	//current page

	$_SESSION['start']=$i;
	$_SESSION['end']=$i+2;


header("Location:review_meaning.php");


?>