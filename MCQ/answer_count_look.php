<?php
session_start(); 
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
include 'answer_count_compute.php';
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/
    #answer_display
    {
      background:url(../images/mcq11.png);
      font-family:'Pompiere';
      font-size: 70px;
      font-weight: 500; 
      color:#252525;

    }
    #counts
    {
      margin-left:150px;
    }
	.rev
	
{
	background: #e3e3e3;
	border: 1px solid #ccc;
	color: #333;
	
	font-size: 10px;
	font-weight: bold;
	padding: 8px 0 9px;
	text-align: center;
	width: 80px;
	cursor:pointer;
	
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
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="common.css" />
      <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

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
	 </p>
      </div>
</div>
<div style="height:550px; width:100%; float:left; f ">
      <div style="height:550px; width:20%; float:left;">
       <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../homepage after login/home.php"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="../flashCards/flash_interface_look.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../graphs/graph_interface_look.php"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../review/review_interface.php"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
      </div>
      
      <div id="answer_display" style="height:500px; width:60%; float:left; border: 2px solid #252525; margin-top:50px;">
        <br>
      	<span id="counts"> Correctly Answered: <?php echo $cans ?></span>
        <br>
      	<span id="counts"> Wrongly Answered: <?php echo $wans ?></span>
        <br>
      	<span id="counts">  Unattempted: <?php echo $nans ?></span>
        <br>
        <button class="rev" onclick="location.href ='answer_review.php'" style="margin-left:250px;">Review answers</button>
       <button class="rev" onclick="location.href ='drop_table.php'">Save Score</button>

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
</div>
</html>