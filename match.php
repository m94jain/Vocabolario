<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");


	$query = mysql_query("SELECT *  FROM master_word_mod") or die(mysql_error());	 
	$c=0;
	
	
		while($row=mysql_fetch_array($query))
		{
			$word[$c]=$row['word'];
			++$c;
		}
	
		mysql_close($connection);



?>