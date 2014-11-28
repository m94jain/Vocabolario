
<?php 

session_start();    //to access the session variable created during log in 
$mcq_table = "mcq_".$_SESSION['id'];
$uniqueid="pmd_".$_SESSION['id'];
$graph = "graph_".$_SESSION['id'];
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");


$fetch_row = mysql_query( "DROP TABLE $mcq_table" );
$_SESSION['played_mcq'] = 0;
for($i=1;$i<5;$i++)
{
		$l = $i+1;
		$fetch_val = mysql_query("select * from $graph where day_no = '$l'");
        $fetch_val_r = mysql_fetch_array($fetch_val);
        $val = $fetch_val_r['value'];
        $row_update = mysql_query("UPDATE $graph SET value = '$val'
                       WHERE day_no = '$i'" );
        echo $l."--->".$i; 

}

$fetch_rightans = mysql_query("SELECT SUM(rightans) AS correct FROM $uniqueid;");
$fetch_rightans_r = mysql_fetch_array($fetch_rightans);
$correct= $fetch_rightans_r['correct'];
//echo $correct;
$fetch_wrongans = mysql_query("SELECT SUM(wrongans) AS incorrect FROM $uniqueid;");
$fetch_wrongans_r = mysql_fetch_array($fetch_wrongans);
$incorrect= $fetch_wrongans_r['incorrect'];
if($incorrect ==0)
{
	$ratio = $correct/1;
	echo "here";
}
else
{
	if($correct==0)
	{
		$ratio= 1/$incorrect;
	}
	else
	{
		$ratio = $correct/$incorrect;
	}
}
echo $ratio;
$row_update = mysql_query("UPDATE $graph SET value = '$ratio' WHERE day_no = 5" );
echo "updated";

header("Location:../homepage after login/home.php");

	

?>



