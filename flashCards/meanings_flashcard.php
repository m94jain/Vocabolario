
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

 
$uniqueid="pmd_".$_SESSION['id'];

//echo $uniqueid;
$auto_inc = mysql_query( "SELECT * FROM $uniqueid ORDER BY count DESC LIMIT 1" ) or die(mysql_error());

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
    $word_list= mysql_query( "SELECT * FROM master_word WHERE sno>=$ai+1 AND sno<=$ai+10;");
	$n = mysql_num_rows($word_list);
		$c = 0;
		while($row = mysql_fetch_array($word_list))
		{
			$word[$c] = $row['word'];
			$w = $row['word'];
			//echo $w;
            
            $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");
            $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
            $word_no = $fetch_word_no_r['synset_id'];
            //echo $word_no."<br>";

            $fetch_meaning = mysql_query("select meaning from meaningset where synset_id = '$word_no'");
            $fetch_meaning_r = mysql_fetch_array($fetch_meaning);
            $meaning[$c] = $fetch_meaning_r['meaning'];
			$t = $ai+$c+1;
			$c++;
		}
		
	

?>



