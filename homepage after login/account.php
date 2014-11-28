<?php
$er="";
$update="";
include('updatetab.php');
?>
<html>
<head>
 <style>
/*
 div 
    {
      border: 2px solid;
      border-radius: 0px;
    }
	*/
label
{
	padding:20px;
    font-size:15px;
	float:left;
}

input[type="text"]
{	
	float:left;
	margin-left:20px;
	width:220px;
	height:23px;
	border-radius: 4px;
}
input[type="password"]
{	
	float:left;
	margin-left:20px;
	width:220px;
	border-radius: 4px;
}
input[type="submit"]
{	
	margin-left:20px;
	width:120px;
	background: #e3e3e3;
	border: 1px solid #ccc;
	color: #333;
	font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
	font-size: 14px;
	font-weight: bold;
	padding: 8px 0 9px;
	text-align: center;
	
	cursor:pointer;
	float:left;

	text-shadow: 0px 1px 0px #fff;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0px 0px 2px #fff inset;
	-webkit-box-shadow: 0px 0px 2px #fff inset;
	box-shadow: 0px 0px 2px #fff inset;
}
  </style>
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="common.css" />
   <link rel="stylesheet" href="../nav_bar/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body style="background:#252525;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
	</div>
	<div style="width:50%; height:70px; float:left;">
	</div>
	<div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
		 <p style="font-family:'Fjalla One'"><?php echo "Welcome ".$_SESSION['fname']; ?>
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Account" selected="selected">Account  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="home.php" >Profile</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:530px; width:100%; float:left; font-family:'Puritan';  ">
	<!--<p style="font-size: 5.8em; color: #fefefe; font-family: font-family:"Dosis", Dosis, sans-serif;">BETTER</p>
	<p style="font-size: 3.9em; color: #fefefe; font-family: font-family:"Dosis", Dosis, sans-serif;">THINKING</p>
	-->
	<br>
	<br>
	<br>
	
	
	<div style="height:475px;width:24%;float:left">
	 <nav class="menu slide-menu-left">
    <ul>
        <li><a href="home.php"><img src="../nav_bar/nav_home.png" style="margin-top:25px;"></a></li>
        <li><a href="../flashCards/flash_interface_look.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="#"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="#"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:190px;">
	</div>
	<div style="height:475px;width:35%;float:left;border-radius:10px;border:3px solid #333;background:white; margin-left:140px; margin-top:-25px;">
	<!--form starts here -->
	<div style="width:100%;height:30px;background:#ffde00;text-align:center;font-family:'Oswald';font-size:20px">
	UPDATE
	</div>
	<form method="post">
	<div style="height:350px;width:40%;float:left;margin:25px 10px;font-family:'Montserrat';">
	<label>First Name </label>
	<label>Last Name </label>
	<label> *Old Password</label>
	<label>*New Password </label>
	<label>*Confirm Password</label>
	</div>
	<div style="height:350px;width:50%;float:left;margin:25px 10px">
	<input style="margin-top:21px;" type="text" name="fname" <?php echo"value=".$_SESSION['fname']?>><br>	<!--put default name from session -->
	<input style="margin-top:28px;" type="text" name="lname" <?php echo"value=".$_SESSION['lname']?>><br><!--put default name from session -->
	<input  style="margin-top:35px;" type="password" name="passold"><br>
	<input style="margin-top:40px;" type="password" name="passcon"><br>
	<input style="margin-top:40px;" type="password" name="passnew"><br>
	<span style="color:red"><i><?php echo $er; ?> <i></span>
	<span style="color:blask"><i><?php echo $update; ?> <i></span>
	</div>
	<div >
	<input type="submit" name="save_pass" Value="Update Password">
	<input type="submit" name="save_name" Value="Update Name"> 
	</div>
	</form>
	</div>
	
</div>
	
<script src="../nav_bar/js/classie.js"></script>
<script src="../nav_bar/js/nav.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34160351-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>	

	
</body>
</html>

