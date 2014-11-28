
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//session_start();
$uniqueid="pmd_".$_SESSION['id'];
$codes = array();
$word_list= mysql_query( "SELECT * FROM $uniqueid where (rightans/asked)<0.6 AND asked>0 ");
$n = mysql_num_rows($word_list);
//echo $n;
$c=0;
while($row = mysql_fetch_array($word_list))
{
	$codes[$c] = $row['code'];
    //echo $codes[$c]."<br>";
    $c = $c+1;
}
$word = array();
$meaning = array();

$k = $_SESSION['start'];
$kl = $_SESSION['end'];
//echo $n;
//echo $kl;
if($kl<$n)	//if words in true condition are more than 10
{
  // echo "here";
for($i =$k ;$i<=$kl;$i++)
{
	$s= $codes[$i];
	$fetch_word = mysql_query("select * from master_word where sno = '$s' ");	//searching the coressponding word in masterword
    $fetch_word_r = mysql_fetch_array($fetch_word);
    $x = $i-$k;
    $word[$x] = $fetch_word_r['word'];
    $w = $word[$x];
    $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");	//searching the same word in wordset
    $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
    $word_no = $fetch_word_no_r['synset_id'];
    //echo $w."-------";

    $fetch_meaning = mysql_query("select meaning from meaningset where synset_id = '$word_no'");	//searching the meaning of the word
    $fetch_meaning_r = mysql_fetch_array($fetch_meaning);
    $meaning[$x] = $fetch_meaning_r['meaning'];
    //echo $meaning[$x]."<br>";
}
}
else
{

   for($i=$kl-9;$i<$n;$i++)	
   {
    $s= $codes[$i];
    $fetch_word = mysql_query("select * from master_word where sno = '$s' ");
    $fetch_word_r = mysql_fetch_array($fetch_word);
    $x = $i-$k;
    $word[$x] = $fetch_word_r['word'];
    $w = $word[$x];
    $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");
    $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
    $word_no = $fetch_word_no_r['synset_id'];
    //echo $w."-------";
    //echo $s;

    $fetch_meaning = mysql_query("select meaning from meaningset where synset_id = '$word_no'");
    $fetch_meaning_r = mysql_fetch_array($fetch_meaning);
    $meaning[$x] = $fetch_meaning_r['meaning'];
    // echo $meaning[$x]."<br>";

   }
   for($i=$n;$i<=$kl;$i++)
   {
    $x = $i-$k;
    $word[$x] = 0;
    $meaning[$x] = 0;
    // echo $meaning[$x]."<br>";

   }
}
?>



