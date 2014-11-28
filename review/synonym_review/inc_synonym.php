<?php
session_start();
$s=$_SESSION['s_start'];
$s=$s+3;
$_SESSION['s_start']=$s;
$e=$_SESSION['s_end'];
$e=$e+3;
$_SESSION['s_end']=$e;

header("Location:review_synonym.php");



?>