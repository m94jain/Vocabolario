<?php
session_start();
$i=$_GET['i'];// session value for selected page 

$j=$_SESSION['goingfrom'];	//current page

	$_SESSION['s_start']=$i;
	$_SESSION['s_end']=$i+2;


header("Location:review_synonym.php");


?>