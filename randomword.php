<?php

define('DB_HOST','localhost');
define('DB_NAME','vocab');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("failed to connect to mysql:" .mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("failed to connect to mysql".mysql_error());

$current=date('m/d/Y',time());
$query1=mysql_query("SELECT * from date_tod ");

if(mysql_num_rows($query1)==0)	//checking if the database is empty 
	{
		
		
		$query = mysql_query("SELECT *  FROM master_word ORDER BY RAND() LIMIT 1") or die(mysql_error());	
		$row = mysql_fetch_array($query) or die(mysql_error());	//fetching a random word 
		$word=$row['word'];	//outputting from vocab.php
		
	$quedic = mysql_query("SELECT wordset.word,meaningset.meaning FROM wordset INNER JOIN meaningset 
	ON meaningset.synset_id=wordset.synset_id where wordset.word='$word'") or die(mysql_error());
		$row=mysql_fetch_array($quedic) or die(mysql_error());
		
		$meaning=$row['meaning'];//^ <-------- take meaning from wordnet database
		$query2=mysql_query("INSERT into date_tod(day,word,meaning) values ('$current','$word','$meaning')");//storing the word and meaning in a table

	}
	else
	{
		$query3=mysql_query("SELECT * from date_tod where day='$current'");
		if(mysql_num_rows($query3)==0)	//checking if day is not same
		{
			$updating=mysql_query("TRUNCATE TABLE date_tod");
			
		$query = mysql_query("SELECT *  FROM master_word ORDER BY RAND() LIMIT 1") or die(mysql_error());
		$row = mysql_fetch_array($query) or die(mysql_error());
		$word=$row['word'];
		
		$quedic = mysql_query("SELECT wordset.word,meaningset.meaning FROM wordset INNER JOIN meaningset 
	ON meaningset.synset_id=wordset.synset_id where wordset.word='$word'") or die(mysql_error());
		$row=mysql_fetch_array($quedic) or die(mysql_error());
		
		$meaning=$row['meaning'];
		$query2=mysql_query("INSERT into date_tod(day,word,meaning) values ('$current','$word','$meaning')");
		}
		else
		{
			$query_fet=mysql_query("SELECT * from date_tod");
		$row = mysql_fetch_array($query_fet) or die(mysql_error());
		$word=$row['word'];
		$meaning=$row['meaning'];
		}
	
	}	
	
	

?>


