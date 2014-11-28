<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
include 'graph_list.php';
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }
 */
 select {
    padding:3px;
	width:100px;
    margin:0px 5px;
    -webkit-border-radius:10px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}

.image{
  border-bottom: 2px solid;
  bottom: 0;
}
 </style>
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="graph.css" />
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
</head>
<body style="background:#013B5A;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left; margin-bottom:30px;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px; margin-bottom:20px;">
	</div>
	<div style="width:50%; height:70px; float:left;">
	</div>
		<div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
		 <p style="font-family:'Fjalla One'"><?php  echo "Welcome ".$_SESSION['fname']; ?>
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Setting" selected="selected">Settings  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="../homepage after login/account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>

<div style="width:100%; height:20px; text-align:center; color:white;">

</div>


<div style="height:475px; width:5%; float:left;">
  <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../homepage after login/home.php"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="../flashCards/flash_interface_look.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../graphs/graph_interface.php"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../review/review_interface.php"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
</div>
<div style="height:500px; width:20%; float:left;  margin-top:40px;">
  </div>

<div style="height:500px; width:48%; float:left; background-color:#cccccc; border:2px solid gray; overflow:hidden; display: inline-block; margin-top:40px;">
<img src="../images/pie.png" class="image" style=" height:570px; margin-left:68px;overlay:none; ">
</div>

<div style="height:500px; width:25%; float:left;  margin-top:40px;">
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