<?php
session_start();
$_SESSION['once'] = 0;
$_SESSION['start']=1;
$_SESSION['end']=3;

header("Location:review_meaning.php");
?>