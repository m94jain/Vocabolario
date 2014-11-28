<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="PMD_".$_SESSION['id'];
$match_table="match_".$_SESSION['id'];
$graph = "graph_".$_SESSION['id'];
$updatequery=mysql_query("select * from $match_table");
for($i=0;$i<5;$i++)
{
	$row=mysql_fetch_array($updatequery);
	$count=$row['count'];
	if($row['correct']==$row['try'])	//if right answer
	{
		mysql_query("UPDATE $uniqueid SET rightans=rightans+1 where count='$count'");
		mysql_query("UPDATE $uniqueid SET asked=asked+1 where count='$count'");
	}
	
	else	//wrong answer
	{
		mysql_query("UPDATE $uniqueid SET wrongans=wrongans+1 where count='$count'");
		mysql_query("UPDATE $uniqueid SET asked=asked+1 where count='$count'");
	}
}

$fetch_row = mysql_query( "DROP TABLE $match_table" );
$_SESSION['match_played'] = 0;
$_SESSION['msg'] = 0;

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