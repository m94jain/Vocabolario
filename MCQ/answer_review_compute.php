
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

 
$mcq_table = "mcq_".$_SESSION['id'];
$_SESSION['mcq_played']=0;
for($i=0; $i<6; $i++)
{
	$fetch_row = mysql_query( "SELECT * FROM  $mcq_table where qno=$i" ) or die(mysql_error());
    $fetch_row_r = mysql_fetch_array($fetch_row);
    $sno = $fetch_row_r['question'];
    $answered = "ans".$fetch_row_r['answered'];
    //echo $sno;
    //echo $correct;
    //echo $answered;
    $main_query =  mysql_query( "SELECT * FROM master_word where sno='$sno'" ); 
    $main_query_r = mysql_fetch_array($main_query) or die(mysql_error());
    $meaning[$i] = $main_query_r['one'];
    $correct[$i] = $main_query_r['word'];
    if($answered=="ans0")
    {
    	$user_ans[$i] = "Unattempted";
    }
    else
    {

      $answered_no =  $fetch_row_r[$answered]; 
      $answered_query =  mysql_query( "SELECT * FROM master_word where sno='$answered_no'" ); 
      $answered_query_r = mysql_fetch_array($answered_query) or die(mysql_error());
      $user_ans[$i] = $answered_query_r['word'];
    }



     
}

	

?>



