
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
 
$mcq_table = "mcq_".$_SESSION['id'];
$_SESSION['mcq_played']=1;

//echo $uniqueid;
$fetch_correct_count = mysql_query( "SELECT * FROM $mcq_table where right_flag=1" ) or die(mysql_error());
$cans = mysql_num_rows($fetch_correct_count);
//echo $cans;
$fetch_correct_count = mysql_query( "SELECT * FROM $mcq_table where right_flag=-1" ) or die(mysql_error());
$wans = mysql_num_rows($fetch_correct_count);
//echo $wans;
$fetch_correct_count = mysql_query( "SELECT * FROM $mcq_table where right_flag=0" ) or die(mysql_error());
$nans = mysql_num_rows($fetch_correct_count);
//echo $nans;


	

?>



