<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();
if(isset($_POST['submit']))
{
$wordpost=$_POST['searchword'];


if(empty($wordpost))	//if entered nothing and search
	{
		$msg="Enter a Word";
		$word_dic="";
		$meaning_dic="";
	}
	else	
	{
		$msg="";
		$query = mysql_query("SELECT wordset.word,meaningset.meaning FROM wordset INNER JOIN meaningset 
		ON meaningset.synset_id=wordset.synset_id where wordset.word='$wordpost'") or die(mysql_error());	 //to check if same entry exists
		
			if(mysql_num_rows($query)==0)
		{
			$word_dic=$wordpost." Does not exist in our Database";
			$meaning_dic="";
			$msg="";
		}
		else
		{
		$row = mysql_fetch_array($query) or die(mysql_error());
		$word_dic=$row['word'];
		$meaning_dic=$row['meaning'];
		
		}
	}
}		
		mysql_close($connection);
		


?>