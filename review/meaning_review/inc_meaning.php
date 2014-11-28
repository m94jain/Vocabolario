<?php
session_start();
$s=$_SESSION['start'];
$s=$s+3;
$_SESSION['start']=$s;
$e=$_SESSION['end'];
$e=$e+3;
$_SESSION['end']=$e;

header("Location:review_meaning.php");



?>