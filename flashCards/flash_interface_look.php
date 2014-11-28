<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }
 */</style>
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="flash_interface.css" />
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
      <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

</head>
<body style="background:#d62323;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
	</div>
	<div style="width:50%; height:70px; float:left;">
	</div>
	<div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
		 <p style="font-family:'Fjalla One'"><?php echo "Welcome ".$_SESSION['fname']; ?>
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Setting" selected="selected">Settings  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="../homepage after login/account.php" >Account</option>
		 </select>
		 </p>
		 
	</div
</div>

<div style="height:475px; width:5%; float:left;">
  <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../homepage after login/home.php"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li ><a href="#"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../graphs/graph_interface.php"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../review/review_interface.php"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
</div>

<div style="height:540px; width:94%; float:left;  ">
	<div style=" margin-left: 245px; margin-top:95px;">      
   <div class="ch-grid">
      <li>
        <div class="ch-item ch-img-1">
          <div class="ch-info">
            <h1>
           <a href="meanings_flashcard_look.php">  
            <img src="../images/mean.png" style="margin-top:29px; margin-left:47px;">
           </a>
            </h1>
            
            
          </div>
        </div>
      </li>
          
      <li>
        <div class="ch-item ch-img-2" style="margin-left:200px;">
          <div class="ch-info">
            <h2> 
              <a href="synonyms_initiate.php">
            <img src="../images/sim.png" style="margin-top:29px; margin-left:47px;" >
          </a>
            </h2>
           
         </div>
        </div>
      </li>
    </div>
  </div>

  <div style="margin-left:215px; height:25px; margin-top:15px; text-align:center; font-size: 1.3em;word-wrap:break-word;  word-wrap:break-word; color: #fffefe; font-weight: 100; letter-spacing: 0.5px; ">
    <div style="width:350px; float:left; font-family:'Droid Sans';">
      MEANINGS
    </div>
    <div style="width:350px; float:left; margin-left:120px; font-family:'Droid Sans';">
      SYNONYMS
    </div>
  </div>

  <div style="height:5px; margin-left:240px;margin-top:5px; margin-bottom:10px;">
    <div style="height:5px; width:260px; float:left;">
        <hr style="width:25%; height:5px; margin-left:113px; display:block; border:0; border-top: 5px solid #fffefe;"></hr>
   </div>
   <div style="height:5px; width:260px; float:left; margin-left:227px;">
        <hr style="width:25%; height:5px; display:block; border:0; border-top: 5px solid #fffefe;"></hr>
   </div>
  </div>

  <div style="height:100px; margin-left:200px; margin-top:20px; text-align:center;font-size: 1.0em; word-wrap:break-word; color: #fffefe; font-weight: 100; letter-spacing: 1px; line-height: 150%;">
    <div style="width:240px; float:left; margin-left:74px; ">
      Know your words. Learn new words and their meanings in sets of ten words!
   </div>
   <div style="width:240px; float:left;  margin-left:230px;">
      'What other words can I use for this word?' Problem solved! Get synonyms of some the new words!
    </div>
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