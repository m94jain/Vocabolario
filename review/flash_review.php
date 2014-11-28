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
 </style>
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="flash_review.css" />
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
</head>
<body style="background:#013B5A;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
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

<div style="height:540px; width:94%; float:left;  ">
	<div style=" margin-left: 245px; margin-top:95px;">      
   <div class="ch-grid">
      <li>
        <div class="ch-item ch-img-1">
          <div class="ch-info">
            <h1>
             <!-- <form action="../MCQ/mcq_initiate.php">
                <input type="image" src="../images/fcre_mean_hover.png" alt="Submit" style="margin-top:5px; margin-left:20px;">
              </form>-->
             <a href="meaning_review/pre_review_meaning.php"> 
              <img src="../images/fcre_mean_hover.png" style="margin-top:8px; margin-left:27px;">
              </a>
            </h1>
            
            
          </div>
        </div>
      </li>
          
      <li>
        <div class="ch-item ch-img-2" style="margin-left:222px;">
          <div class="ch-info">
            <h2> 
              <a href="synonym_review/pre_review_synonym.php">
             <img src="../images/fcre_syn_hover.png" style="margin-top:5px; margin-left:23px;" >
           </a>
            </h2>
         </div>
        </div>
      </li>

    </div>
  </div>

  <div style="margin-left:225px; height:25px; margin-top:15px; text-align:center; font-size: 1.3em;word-wrap:break-word;  word-wrap:break-word; color: #fffefe; font-weight: 100; letter-spacing: 0.5px; ">
    <div style="width:350px; float:left; font-family:'Droid Sans';">
      MEANINGS REVIEW
    </div>
    <div style="width:350px; float:left; margin-left:130px; font-family:'Droid Sans';">
      SYNONYMS REVIEW
    </div>
  </div>

  <div style="height:5px; margin-left:245px;margin-top:5px; margin-bottom:10px;">
    <div style="height:5px; width:260px; float:left;">
        <hr style="width:25%; height:5px; margin-left:110px; display:block; border:0; border-top: 5px solid #fffefe;"></hr>
   </div>
   <div style="height:5px; width:260px; float:left; margin-left:250px;">
        <hr style="width:25%; height:5px; margin-left:auto; margin-right:auto; display:block; border:0; border-top: 5px solid #fffefe;"></hr>
   </div>
  </div>

  <div style="height:100px; margin-left:200px; margin-top:20px; text-align:center;font-size: 1.0em; word-wrap:break-word; color: #fffefe; font-weight: 100; letter-spacing: 1px; line-height: 150%;">
    <div style="width:240px; float:left; margin-left:70px; ">
     Review your words! Click here to see all the word you have already learnt and revise!
   </div>
   <div style="width:240px; float:left;  margin-left:250px;">
      How many words have you mastered? Get to know your word levels here!
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