<?php
session_start();
$s=$_SESSION['start'];
$s=$s-10;
$_SESSION['start']=$s;
$e=$_SESSION['end'];
$e=$e-10;
$_SESSION['end']=$e;

header("Location:mastered_look.php");



?>