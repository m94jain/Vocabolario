<?php
session_start();
$_SESSION['once'] = 0;
$_SESSION['start']=0;
$_SESSION['end']=9;

header("Location:intermediate_look.php");
?>