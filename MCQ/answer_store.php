<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];
$mcq_table = "mcq_".$_SESSION['id'];

for($i=0;$i<=5;$i++)
{
  $x = $i+1;
	$a = "answer".$x;
	if(isset($_POST[$a]))
	{
        $ans = htmlspecialchars($_POST[$a]);
        $rowSQL = mysql_query( "SELECT * FROM $mcq_table where qno = $i" );
        $row = mysql_fetch_array( $rowSQL )  or die(mysql_error());
        $t=$row['correct'];
        $code = $row['question'];
        if ($ans == $t)
        {
          echo $ans." correct --->".$t."<br>";
        	$rowSQL2 = mysql_query("UPDATE $mcq_table SET right_flag = 1 WHERE qno = '$i'" );
          $rowSQL3 = mysql_query("UPDATE $mcq_table SET answered = '$ans' WHERE qno = '$i'" );
          $rowSQL4 = mysql_query("UPDATE $uniqueid SET rightans = rightans+1 WHERE count = '$code'" );
          $rowSQL5 = mysql_query("UPDATE $uniqueid SET asked = asked+1 WHERE count = '$code'" );
          echo "updating correct for ".$code."<br>";
        }
        else
        {
          echo $ans." correct --->".$t."<br>";
        	$rowSQL2 = mysql_query("UPDATE $mcq_table SET right_flag = -1 WHERE qno ='$i'" );
          $rowSQL3 = mysql_query("UPDATE $mcq_table SET answered = '$ans' WHERE qno = '$i'" );
          $rowSQL4 = mysql_query("UPDATE $uniqueid SET wrongans = wrongans+1 WHERE count = '$code'" );
          $rowSQL5 = mysql_query("UPDATE $uniqueid SET asked = asked+1 WHERE count = '$code'" );
          echo "updating wrong for ".$code."<br>";
        }
  }
  else
  {
    $rowSQL = mysql_query( "SELECT * FROM $mcq_table where qno = $i" );
    $row = mysql_fetch_array( $rowSQL )  or die(mysql_error());
    $t=$row['correct'];
    $code = $row['question'];
    echo "unchecked";
    echo $ans." correct --->".$t."<br>";
    $rowSQL3 = mysql_query("UPDATE $mcq_table SET answered = 0 WHERE qno = '$i'" );
    $rowSQL2 = mysql_query("UPDATE $uniqueid SET wrongans = wrongans+1 WHERE count = '$code'" );
    $rowSQL4 = mysql_query("UPDATE $uniqueid SET asked = asked+1 WHERE count = '$code'" );
    echo "updating wrong for ".$code."<br>";
  }
}
header("Location:answer_count_look.php");
?>

