<?php

$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

if(isset($_POST['signup']))
{
$firstname=$_POST['Fname'];
$lastname=$_POST['Lname'];
$email=$_POST['Email'];
$password=$_POST['pass1'];
$password2=$_POST['pass2'];

	
//confirm pass <--
if(empty($firstname)  ||empty($lastname) ||empty($email) ||empty($password) ||empty($password2))
{
	$fillf="*Fill all the fields";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
   $invem="*Email is invalid";
}
else if($password!=$password2)
{
	$passmat="Passwords don't match ";
}

else
{

	$querydouble = mysql_query("SELECT *  FROM username where email = '$email'") or die(mysql_error());	 //to check if same entry exists
	if(mysql_num_rows($querydouble)!=0)
		{
			$exists="Email already exists";
		}
		
		else
		
	{
		$query = "INSERT INTO username(email,pass,fname,lname) VALUES('$email','$password','$firstname','$lastname')";

		$result = mysql_query($query);
		if($result)
			{
			
				$id=mysql_query("SELECT * FROM username where email = '$email' ") or die(mysql_error());	//fetching id for the new user
				$row = mysql_fetch_array($id) or die(mysql_error());
				$uniqueid="PMD_".$row['id'];
				$graphid="graph_".$row['id'];	//for graph table
				
					mysql_query("CREATE TABLE $uniqueid(count INT,code INT,rightans INT,wrongans INT,asked INT)")
				or die(mysql_error());  //base table
				
				mysql_query("CREATE TABLE $graphid (day_no INT,value DOUBLE PRECISION )");
				for($i=1;$i<=5;$i++)
				mysql_query("INSERT INTO $graphid values('$i',0)");
				$_SESSION['fname'] = $firstname;	
				$_SESSION['id']=$row['id'];
				$_SESSION['lname'] = $lastname;
				$_SESSION['passcurrent'] = $password;
				$_SESSION['email']=$email;
				$_SESSION[match_played]=0;
				header("Location:homepage after login\home.php");
			}
		
		mysql_close($connection);
	}
}
}

?>