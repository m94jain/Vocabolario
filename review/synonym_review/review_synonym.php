<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();
$uniqueid="pmd_".$_SESSION['id'];
$word_list= mysql_query( "SELECT * FROM $uniqueid ");
$w = mysql_num_rows($word_list);
$n=$w/10;
//echo $n;
if($_SESSION['fname']=="nobody")
header("Location:../../vocab.php");
$u = $_SESSION['s_once'];
$start=$_SESSION['s_start'];
$e=$_SESSION['s_end'];
if($u==0)
{
  $_SESSION['s_once']=1;
  $_SESSION['s_left']=1;
  $l=1;
  $_SESSION['s_middle']=2;
  $m=2;
  $_SESSION['s_right']=3;
  $r=3;
}
else
{
$_SESSION['s_left']=$start;
$_SESSION['s_middle']=$start+1;
$_SESSION['s_right']=$start+2;
$l=$_SESSION['s_left'];
$m=$_SESSION['s_middle'];
$r=$_SESSION['s_right'];
}
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
  
  input[type="submit"] 
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

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../../nav_bar/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>
<body style="background:#33aa00;">
<div style="height:70px; width:100%; float:left;">
  <div style="width:30%; height:70px; float:left;">
    <img src="../../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
  </div>
  <div style="width:50%; height:70px; float:left;">
  </div>
  <div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
     <p style="font-family:'Fjalla One'"><?php echo "Welcome ".$_SESSION['fname']; ?>
     <select onchange="javascript:location.href=this.value;">
     <option style="display:none" value="Setting" selected="selected">Settings  </option>
     <option value="../../vocab.php" >Sign out </option>
     <option value="account.php" >Account</option>
     </select>
     </p>
     
  </div>
</div>
<div style="height:475px; width:5%; float:left;">
  <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../../homepage after login/home.php"><img src="../../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="../../flashCards/flash_interface_look.php"><img src="../../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../../games interface/games_interface.php"><img src="../../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../../graphs/graph_interface.php"><img src="../../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../../review/review_interface.php"><img src="../../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
</div>


<div style="width:3%; height: 40px; margin-top:225px; float:left; margin-left:50px;">
<a href="dec_synonym.php"><img src="../../images/rev_arrow.png" <?php if($start==1) echo "style='display:none;'";  ?>></a>
  </div>

<div class="container" style="height:475px; width:85%; float:left; font-family:'Puritan';">

   <!-- <div class="codrops-top clearfix">
        <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/FullscreenOverlayStyles/"><span>Previous Demo</span></a>
        <span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18551"><span>Back to the Codrops Article</span></a></span>
      </div>-->
      <section class="demo-1">
        <div class="grid" >
          <div class="box" <?php if($l>$n) echo "style='display:none;'"; else echo "style='margin-left:-50px; margin-top:-20px;'"; ?>>
            <!--<h3><a href="display_left.php"><?php echo $l; ?></a></h3>-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="370" x2="0" y2="-740"/>
              <a xlink:href="display_left.php"><text x="90" y="230" fill="#33aa00"><?php echo $l; ?></text></a>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
            
          </div>
          <div class="box" <?php if($m>$n) echo "style='display:none;'"; else echo "style='margin-left:75px;'"; ?>>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="370" x2="0" y2="-740"/>
              <a xlink:href="display_middle.php"><text x="90" y="230" fill="#33aa00"><?php echo $m; ?></text></a>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
            
          </div>
          <div class="box" <?php if($r>$n) echo "style='display:none;'"; else echo "style='margin-left:75px;'"; ?>>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="400" x2="0" y2="-740"/>
              <a xlink:href="display_right.php"><text x="90" y="230" fill="#33aa00"><?php echo $r; ?></text></a>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
     
          </div>
        </div><!-- /grid -->
      </section>

  </div>

  <div style="width:3%; height: 40px; margin-top:235px; float:left; margin-left:-100px;">
<a href="inc_synonym.php"><img src="../../images/rev_arr.png" <?php if($e>=$n) echo "style='display:none;'";  ?>></a>
  </div>
  
<div id="select_op">	<!-- selecting a particular page starts here-->

	 <select id="myselect" onchange="getValue()" style="margin-left:1202px; margin-top:-450px;">
	<?php 
	$v=$start;
	$_SESSION['goingfrom']=$v;	//current value of the page ...will be used to decrement or increment if the selected value  in the box is > or < current value respectively
	if($n<$v+2)
	{
	$e_lim=$n;
	}
	else{
	$e_lim=$v+2;
	}
	echo"<option value='".$v."' style='display:none' selected='selected'>".$v."-".$e_lim."</option>";
	for($i=1;$i<=$n;$i=$i+3)
	{
		if($i+2>$n)
		{
		    $e_lim=$n;
	    }
		else
		{
		    $e_lim = $i+2;
	    }
		echo "<option value=".$i.">".$i."-".$e_lim."</option>";
		
	}
	?>
	</select>
	</div>



<script src="../../nav_bar/js/classie.js"></script>
<script src="../../nav_bar/js/nav.js"></script>

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
<script>
function getValue()
  {
	var x=document.getElementById("myselect").value;
window.location.href="compute_rev_synonym.php?i="+x; 
 }
</script>

</body>
</html>

