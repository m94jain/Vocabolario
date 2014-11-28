<?php
//gets random 6 words from pmd table and sets the game

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

$uniqueid="PMD_".$_SESSION['id'];
$match_table="match_".$_SESSION['id'];

/*if($_SESSION['match_played']==1)
{
	header("Location:store_match.php");
} 
*/

if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$match_table."'"))==0) 
$val=0;

else
$val=1;

if($val == 0)	//if no table exist then get wordlist and create a table 
{
//get max value of count(auto increment)
$rowSQL = mysql_query( "SELECT MAX( count ) AS l FROM $uniqueid;" );
$row = mysql_fetch_array( $rowSQL )  or die(mysql_error());
$max = $row['l'];


//get 6 unique random numbers 
$rnums = array();	//wil contain the numbers
$i = 0;
while($i < 5)
{
	$c= 0;
	$n = rand(1,$max);
	for($j = 0; $j<$i ; $j++)
	{
		if($rnum[$j] == $n)	//checking for repetetion 
		{
			$c++;
		}
	}

	if($c==0)	//will only have 0 if rand chooses value not chosen before  
	{
		$rnum[$i] = $n;	//contains the sno of word 
		$i++;
	}	
}
	$createtab=mysql_query("CREATE TABLE $match_table(Sno INT,words text,meanings text,correct INT,try INT,count INT);");
	
	for($x=0;$x<5;$x++)
	{
	$query_word=mysql_query("SELECT * FROM master_word where sno=$rnum[$x];");
	$rows=mysql_fetch_array($query_word);
		$word[$x]=$rows['word'];
		$meaning[$x]=$rows['one'];
	}
	
	for($i=0;$i<5;$i++)
	$shufmean[$i]=$meaning[$i];	//save in a seperate array
	
	shuffle($shufmean);
	
	$count=0;

	while($count<=4)
	{
		
		for($i=0;$i<5;$i++)
		{
				if($meaning[$count]==$shufmean[$i])
					{
						$correct[$count]=$i;	//sno for the correct meaning 
						++$count;
						break;
					}
		}
	}
	for($i=0;$i<5;$i++)	
	$inserttab=mysql_query("INSERT INTO $match_table (Sno,words,meanings,correct,count) VALUES('$i','$word[$i]','$shufmean[$i]','$correct[$i]','$rnum[$i]')");
	
	for($i=0;$i<5;$i++)
	$meaning[$i]=$shufmean[$i];	// storing the jumbled meanings in the original array
}
else	//if table exists then get word and its meaning from the existing table
{
	$getdata=mysql_query("Select * from $match_table");
	
	
	for($i=0;$i<5;$i++)
	{
		$row=mysql_fetch_array($getdata);
		$word[$i]=$row['words'];
		$meaning[$i]=$row['meanings'];
	}
	
}

?>