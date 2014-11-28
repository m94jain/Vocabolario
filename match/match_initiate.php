
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];

//echo $uniqueid;
$fetch_count = mysql_query( "SELECT * FROM $uniqueid" );
$count = mysql_num_rows($fetch_count);
if($count==0)
	header("Location:match_not_ready.php");
else
	header("Location:match_look.php");



	

?>



