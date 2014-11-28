<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();	//to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];

if(isset($_POST['home']))
{
echo "i am running";
//echo $uniqueid;
$auto_inc = mysql_query( "SELECT * FROM $uniqueid ORDER BY count DESC LIMIT 1" ) or die(mysql_error());


header("Location:..\homepage after login\home.php");

if(mysql_num_rows($auto_inc) == 0)
{
	$ai =0;
	
}

else
{
	$a_i = mysql_fetch_array( $auto_inc )  or die(mysql_error());
	$ai= $a_i['count'];
	//echo $ai;
}

for($i=$ai+1;$i<=$ai+10;$i++)
{
	$query="INSERT INTO $uniqueid VALUES ($i , $i,0,0,0 )";
	        $result = mysql_query($query);
}
}

if(isset($_POST['synonyms']))
{

//echo $uniqueid;
$auto_inc = mysql_query( "SELECT * FROM $uniqueid ORDER BY count DESC LIMIT 1" ) or die(mysql_error());

echo "i am running";

if(mysql_num_rows($auto_inc) == 0)
{
	$ai =0;
	
}

else
{
	$a_i = mysql_fetch_array( $auto_inc )  or die(mysql_error());
	$ai= $a_i['count'];
	//echo $ai;
}

for($i=$ai+1;$i<=$ai+10;$i++)
{
	$query="INSERT INTO $uniqueid VALUES ($i , $i,0,0,0 )";
	        $result = mysql_query($query);
}
header("Location:synonyms_flashcards_look.php");
}

?>