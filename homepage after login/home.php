<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
$_SESSION['mcq_played']=0;
$_SESSION['beg_review']=0;
$_SESSION['msg']=0;
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
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
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
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Setting" selected="selected">Settings  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:475px; width:5%; float:left;">
  <nav class="menu slide-menu-left">
    <ul>
        <li><a href="#"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="../flashCards/flash_interface_look.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../graphs/graph_interface.php"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../review/review_interface.php"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
</div>
<div style="height:475px; width:94%; float:left; font-family:'Puritan';">
	<!--<p style="font-size: 5.8em; color: #fefefe; font-family: font-family:"Dosis", Dosis, sans-serif;">BETTER</p>
	<p style="font-size: 3.9em; color: #fefefe; font-family: font-family:"Dosis", Dosis, sans-serif;">THINKING</p>
	-->
	<br>
	<br>
	<br>
	<span style="font-size: 8.5em; margin-left:325px; color: #fefefe; letter-spacing: 3px; font-weight: 900;">BETTER </span><br>
	<span style="font-size: 6.0em; margin-left:325px; color: #fefefe;letter-spacing: 8px; font-weight: bold; ">LEARNING </span><br><br>
	<span style="text-align:center;font-size: 1.0em; margin-left:325px; display:block; width:450px; word-wrap:break-word; color: #fefefe; font-weight: 600; letter-spacing: 2px; line-height: 150%;">GET INVOLVED IN THIS EXCELLENT TOOL FOR HONING YOUR VOCABULARY SKILLS AND DELIVERS TO YOU AN EFFECTIVE AND PERFECTLY DESIGNED RESULT.</span>

	</div>
<div style="height:540px; width:120%; float:left; background:#ffde00; margin: 0 -5px 0 -20px;">
	<div style="width:57%; height: 400px; float: left; margin-left:40px; font-family:'puritan'">
		<br><br><br><br>
		<span style="font-size:1.2em; display:block;margin-left:50px; width: 750px; color:#252525; font-weight:600; letter-spacing:2px;text-align:justify; line-height:150%;">
           This site is an attempt to make it easier for students to get along with new words. In a fun manner, we have aimed at giving you a large variety of words in an organized and regular way through Flashcards which not only enrich you with the meanings of the words but also provide you with sysnonyms and antonyms of the words giving you a better and clearer picture of every word; at the same time, through the synonyms, our users get a lateral expansion of their vocabulary. 
           After learning the words from flashcards, you get to practice them in an interactive way through the exercises of Match The Columns and Multiple Choice Questions. You can view your progress through the graphs which are based on the assessment of your performance in the daily exercises. It helps you to gear up in case you are lagging behing and provides you constant motivation. For easy revision of what you have learned, a review panel is present which reduces your worry about forgetting what you learned.
		</span>
		<span style="font-size:1.2em; display:block;margin-left:50px; width: 750px; color:#252525; font-weight:600; text-align:center; letter-spacing:2px; line-height:150%;">
			SO EMBARK ON THIS VOYAGE WHICH TAKES YOU THROUGH THE OCEAN OF NEW WORDS..
		</span>
	</div>
	<div style="width:40%; height: 400px; float:left;">
		<img src="../images/pencil.png" style="position:relative; bottom:60px;">
	</div>
	</div>
<div style="height:600px; width:120%; float:left; background: #ffffff; margin: 0 -5px 0 -20px;">
    <div style="height:60px; width:100%; margin-left:165px; margin-top:80px; text-align:center; font-size: 2.8em; font-family:'Candal'; color: #ffde00; font-weight: 1000; letter-spacing: 1px;">
    	<div style="height:60px; width:260px; float:left; ">
    		01
    	</div>
    	<div style="height:60px; width:260px; float:left;">
    		02
    	</div>
    	<div style="height:60px; width:260px; float:left;">
    		03
    	</div>
     	<div style="height:60px; width:260px; float:left;">
     		04
    	</div>
    </div>

	<div style=" margin-left: 165px; margin-top:10px;">      
        <div class="ch-grid">
          <li>
            <div class="ch-item ch-img-1">
              <div class="ch-info">
              	<h1>
                <a href="../flashCards/flash_interface_look.php">
                  <img src="../images/flash.png" style="margin-top: -45px; margin-left:-20px;">
                </a>

                </h1>
                                              </div>
            </div>
          </li>
          
          <li>
            <div class="ch-item ch-img-2" style="margin-left:50px;">
              <div class="ch-info">
                <h2> 
                  <a href="../games interface/games_interface.php"> 
                 <img src="../images/ga.png" style="margin-left:-18px; margin-top:-43px;">
                </a>
                </h2>
              </div>
            </div>
          </li>

          <li>
            <div class="ch-item ch-img-3" style="margin-left:100px;">
              <div class="ch-info">
                <h3>
                  <a href="../graphs/graph_interface.php">
                  <img src="../images/perf.png" style="margin-left:10px; margin-top:-17px;" >
                </a>
                </h3>
                
              </div>
            </div>
          </li>

          <li>
            <div class="ch-item ch-img-4" style="margin-left:150px;">
              <div class="ch-info">
                <h3>
                  <a href="../review/review_interface.php">
                  <img src="../images/re.png" style="margin-left:-20px; margin-top:-33px">                
                </a>
              </h3>
              </div>
            </div>
          </li>
        </div>    
    </div>
	
	<div style="width:100%; height:25px; margin-left:165px; margin-top:10px; text-align:center; font-family:'Droid Sans'; font-size: 1.3em; color: #252525; font-weight: 900; letter-spacing: 0.5px;">
		<div style="height:25px; width:260px; float:left;">
    		FLASHCARDS
    	</div>
    	<div style="height:25px; width:260px; float:left;">
    		GAMES
    	</div>
    	<div style="height:25px; width:260px; float:left;">
    		PERFORMANCE
    	</div>
     	<div style="height:25px; width:260px; float:left;">
     		REVIEW
    	</div>
	</div>

	<div style="width:100%; height:5px; margin-left:165px;margin-top:5px; margin-bottom:10px;">
		<div style="height:5px; width:260px; float:left;">
    		<hr style="width:25%; height:5px; margin-left:auto; margin-right:auto; display:block; border:0; border-top: 5px solid #ffde00;"></hr>
    	</div>
    	<div style="height:5px; width:260px; float:left;">
    		<hr style="width:25%; height:5px; margin-left:auto; margin-right:auto; display:block; border:0; border-top: 5px solid #ffde00;"></hr>
    	</div>
    	<div style="height:5px; width:260px; float:left;">
    		<hr style="width:25%; height:5px; margin-left:auto; margin-right:auto; display:block; border:0; border-top: 5px solid #ffde00;"></hr>
    	</div>
     	<div style="height:5px; width:260px; float:left;">
     		<hr style="width:25%; height:5px; margin-left:auto; margin-right:auto; display:block; border:0; border-top: 5px solid #ffde00;"></hr>
    	</div>
	</div>

	<div style="width:100%; height:100px; margin-left:165px; margin-top:20px; text-align:center;font-size: 1.0em; word-wrap:break-word; color: #252525; font-weight: 100; letter-spacing: 1px; line-height: 150%;">
		<div style="width:220px; float:left; display:block; margin-left:20px; ">
    		Get exposed to new words, their meanings, synonyms and antonyms in an organised set of ten words that are easy to grasp and quick to learn!
    	</div>
    	<div style="width:220px; float:left; display:block; margin-left:40px;">
    		Charge yourself up! Play with the words you learned to instill them in your brain with these fun exercises!
    	</div>
    	<div style="width:220px; float:left; display:block; margin-left:40px;">
    		Take a look at your progress till date. How many crests and troughs have you had in this journey of learning new words are you?
    	</div>
     	<div style="width:220px; float:left; display:block; margin-left:45px;">
     		Have a look at all the words you have added to your brain dictionary recently. Drive down the memory lane and recall the words you have explored as of yet!
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

