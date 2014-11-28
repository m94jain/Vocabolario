<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//database connected
$email=$_SESSION['email'];
if(isset($_POST['save_pass']))	//if you want to update just the password
{

$passold=$_POST['passold'];
$passnew=$_POST['passnew'];
$passcon=$_POST['passcon'];
$passcurrent=$_SESSION['passcurrent'];

if(empty($passold) ||empty($passnew) ||empty($passcon)) 
{
	$er="Cannot leave * fields empty ";
}

else if($passold!=$passcurrent)	//if old password is entered wrong
{
	$er="Current Password is incorrect";
}

else if($passnew!=$passcon)	//if new password is confirmed wrong
{
	$er="new Passwords don't match";
}

else
{


	//update database
	$query=mysql_query("UPDATE username SET pass='$passnew' WHERE email='$email' ");
			$update="your information is updated";
		
		//updating session variables 
		
		$_SESSION['passcurrent']=$passnew;
		
}

}

if(isset($_POST['save_name']))
{

 if(empty($fname) ||empty($lname))	//if user leaves either of fname or lname blank
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];

	if(empty($fname))
	$fname=$_SESSION['fname'];
	
	if(empty($lname))
	$lname=$_SESSION['lname'];
	
//update database
	$query=mysql_query("UPDATE username SET fname='$fname',lname='$lname' WHERE email='$email' ");
		$update="your information is updated";
		
		//updating session variables 
		
		$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
}
}


?>