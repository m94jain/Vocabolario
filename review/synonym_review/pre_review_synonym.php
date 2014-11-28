<?php
session_start();
$_SESSION['s_once'] = 0;
$_SESSION['s_start']=1;
$_SESSION['s_end']=3;

header("Location:review_synonym.php");
?>