
<?php 

session_start();    //to access the session variable created during log in 
$mcq_table = "mcq_".$_SESSION['id'];
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");


$fetch_row = mysql_query( "DROP TABLE $mcq_table" );
$_SESSION['played_mcq'] = 0;
header("Location:../flashCards/flash_interface_look.php");

	

?>



