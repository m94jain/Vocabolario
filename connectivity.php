<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");


if(isset($_POST['login']))
{
$username=$_POST['user'];
$password=$_POST['pass'];

if(empty($password))
{
	$passer="*Password Required";
	
}
if(empty($username)) 
{
	$userer="*Username Required";
}

if(!empty($username)&& !empty($password))  //checking the username and password
{

	$passer="";
	$userer="";
	$query = mysql_query("SELECT *  FROM username where email = '$username' AND pass = '$password'") or die(mysql_error());
	if(mysql_num_rows($query)==0)
	{
		$unknownuser="wrong id or password";	//<------ change echo 
	}
	
	else
	{
	$row = mysql_fetch_array($query) or die(mysql_error());
	
	
	if(!empty($row['email']) AND !empty($row['pass']))
	{
		$_SESSION['fname'] = $row['fname'];
		$_SESSION['lname'] = $row['lname'];
		$_SESSION['passcurrent'] = $row['pass'];
		$_SESSION['id']=$row['id'];
		$_SESSION['email']=$row['email'];
		header("Location:homepage after login/home.php"); // redirects
		

	}
	}
}
}


?>


