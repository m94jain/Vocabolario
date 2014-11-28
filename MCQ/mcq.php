<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];
$mcq_table = "mcq_".$_SESSION['id'];

if($_SESSION['mcq_played']==1)
{
    header("Location: answer_count_look.php");
}
else
{
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$mcq_table."'"))==0) 
$val=0;

else
$val=1;
if($val == 0)
{
//get max value of count(auto increment)
$rowSQL = mysql_query( "SELECT MAX( count ) AS l FROM $uniqueid;" );
$row = mysql_fetch_array( $rowSQL )  or die(mysql_error());
$max = $row['l'];

//get 6 unique random numbers 
/*$rnums = array();
$i = 0;
while($i < 6)
{
	$c= 0;
	$n = rand(1,$max);
	for($j = 0; $j<$i ; $j++)
	{
		if($rnum[$j] == $n)
		{
			$c++;
		}
	}

	if($c==0)
	{
		$rnum[$i] = $n;
		$i++;
	}
}

*/

//get 6 unique random numbers 
$rnums = array();
$ask_count = mysql_query( "SELECT * FROM $uniqueid WHERE asked=0 " );
$n_ask = mysql_num_rows($ask_count);
$c=0;
if($n_ask>1)
{
    while($row = mysql_fetch_array($ask_count))
    {
        $ask_zero[$c] = $row['count'];
        $c++;
    }
    $n_zero = rand(0,$n_ask);
    $zero_cater = $code[$n_zero];
    $rnum[5]=$zero_cater;
    $i = 0;
    while($i < 5)
    {
        $c= 0;
        $n = rand(1,$max);
        if($n==$zero_cater)
            $c++;
        for($j = 0; $j<$i ; $j++)
        {
            if($rnum[$j] == $n)
            {
                $c++;
            }
        }

        if($c==0)
        {
            $rnum[$i] = $n;
            $i++;
        }
    }
}
else
{
    $i = 0;
    while($i < 6)
    {
        $c= 0;
        $n = rand(1,$max);
        for($j = 0; $j<$i ; $j++)
        {
            if($rnum[$j] == $n)
            {
                $c++;
            }

            if($c==0)
            {
                $rnum[$i] = $n;
                $i++;
            }
        }
    }
}    


$sql="CREATE TABLE $mcq_table(qno INT,question INT,ans1 INT,ans2 INT,ans3 INT,ans4 INT,correct INT,right_flag INT DEFAULT 0,answered INT)";
$rsql=mysql_query($sql); 
for($k=0;$k<6;$k++)
{
    echo $rnum[$k];
	$word = array();
    $word[0]= $rnum[$k];
    $h = 1;
    while($h<=3)
    {
    	$ran = rand(0,4814);
    	if($ran != $rnum[$k])
    	{
    		$word[$h]=$ran;
    		$h++;
    	}

    }
    $save=0;
    shuffle($word);
    for($t=0;$t<4;$t++)
    {
    	if($word[$t]==$rnum[$k])
    		$save=++$t;
    }
    $cans = $save;
    $s = $k;
    $m = $rnum[$k];
	$query="INSERT INTO $mcq_table VALUES ( $s, $m , $word[0] , $word[1], $word[2] , $word[3] , $cans,0,0)";
	$result = mysql_query($query);
}
}

}

function display_data($ques_no)
{
     //to access the session variable created during log in 
    $mcq_table = "mcq_".$_SESSION['id'];


    $connection = mysql_connect("localhost","root","") or die("could not connect to the server");
    mysql_select_db("vocab",$connection) or die("could not connect to the database!");
    $rrr = $ques_no;
	$ques = mysql_query( "SELECT * FROM $mcq_table WHERE qno=$rrr " );
    $rques = mysql_fetch_array( $ques )  or die(mysql_error());
    $w1 = $rques['question'];
    $w2 = $rques['ans1'];
    $w3 = $rques['ans2'];
    $w4 = $rques['ans3'];
    $w5 = $rques['ans4'] ;
    $a1 = mysql_query( "SELECT word FROM master_word WHERE sno= $w2 ;" );
    $ra1 = mysql_fetch_array( $a1 )  or die(mysql_error());
    $a2 = mysql_query( "SELECT word FROM master_word WHERE sno= $w3;" );
    $ra2 = mysql_fetch_array( $a2 )  or die(mysql_error());
    $a3 = mysql_query( "SELECT word FROM master_word WHERE sno= $w4;" );
    $ra3 = mysql_fetch_array( $a3 )  or die(mysql_error());
    $a4 = mysql_query( "SELECT word FROM master_word WHERE sno= $w5;" );
    $ra4 = mysql_fetch_array( $a4 )  or die(mysql_error());
     $a1r = mysql_query( "SELECT one FROM `master_word` WHERE sno=$w1" );
    $ra1rr = mysql_fetch_array( $a1r )  or die(mysql_error());

    $ques = $ra1rr['one'];

    return array($ques,$ra1['word'],$ra2['word'],$ra3['word'],$ra4['word']);
}

?>














