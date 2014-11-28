<html>
<head>
   <style>
    /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/

    .site_content
    {
     background:url(mcq11.png);
      font-color:#252525;
    }
    .meaning
    {
      color:#252525;
      margin-left:50px;
      margin-top:65px;
      font-size: 50px;
      font-family:'Pompiere',cursive;
      font-weight:700;
    }
    label{
      color:#252525;
      font-size:40px;
     font-family:'Pompiere',cursive;
     font-weight:700;
     margin-left:5px;
    }
    .options
    {
       margin-left:65px;
       margin-bottom:0px;
    }
    .hidden
    {
      display:none;
    }
	.tab1
{	
position: fixed;
      margin-left:700px;
      margin-top:-50px;
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
	.shift-button
{	
position: fixed;
      margin-top:-50px; 
      margin-left:525px;

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
   <link rel="stylesheet" type="text/css" href="flash.css" media="screen" />
   <link rel="stylesheet" href="../nav_bar/css/style.css" />
   <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Cabin Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

   </head>

<?php 
include 'mcq.php';
?>

<body style="background:url(../images/4.png);">
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
    
    <div style="height:550px; width:100%; float:left;  color:#fefefe; ">
      <div style="height:550px; width:20%; float:left;">
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
      <div style="height:20px; width:60%; float:left;">
        <!--shift div-->
      </div>

      <form action="answer_store.php" method="post" style="margin-left:50px;">
        <div id="ques1_content" class="site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
          <?php $arr=display_data(0) ?>
          <input type="hidden" name="ques1" value="0">
          <div class="meaning">
            <span>1. Which of the following words mean <?php echo $arr[0];?> </span><br>
          </div>
          <input class="options" type="radio" name="answer1" value="1" ><label for="answer1"><?php echo $arr[1]; ?> </label><br><br>
          <input class="options" type="radio" name="answer1" value="2" ><label for="answer1"><?php echo $arr[2]; ?> </label><br><br>
          <input class="options" type="radio" name="answer1" value="3" ><label for="answer1"><?php echo $arr[3]; ?> </label><br><br>
          <input class="options" type="radio" name="answer1" value="4" ><label for="answer1"><?php echo $arr[4]; ?> </label><br><br>
          <input type="button" class="tab1" name="Submit" value="next" id="button1n" ONCLICK="window.location.href='javascript:void(0);'" >
        </div>

        <div id="ques2_content" class="hidden site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
          <?php $arr=display_data(1) ?>
          <input type="hidden" name="ques2" value="0">
          <div class="meaning">
            <span>2. Which of the following words mean <?php echo $arr[0];?> among the following words: </span><br>
          </div>
          <input class="options" type="radio" name="answer2" value="1"><label for="answer2"><?php echo $arr[1]; ?></label> <br><br>
          <input class="options" type="radio" name="answer2" value="2"><label for="answer2"><?php echo $arr[2]; ?></label> <br><br>
          <input class="options" type="radio" name="answer2" value="3"><label for="answer2"><?php echo $arr[3]; ?></label> <br><br>
          <input class="options" type="radio" name="answer2" value="4"><label for="answer2"><?php echo $arr[4]; ?></label> <br><br>
          <input class="shift-button" type="button" name="Submit" value="previous" id="button2p" ONCLICK="window.location.href='javascript:void(0);'"  >
          <input type="button" name="Submit" class="tab1" value="next" id="button2n" ONCLICK="window.location.href='javascript:void(0);'">
        </div>

  <div id="ques3_content" class="hidden site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
    
      <?php $arr=display_data(2) ?>
      <input type="hidden" name="ques3" value="0">
      <div class="meaning">
            <span>3. Which of the following words mean <?php echo $arr[0];?> </span><br>
          </div>
      <input class="options" type="radio" name="answer3" value="1"><label for="answer3"><?php echo $arr[1]; ?></label> <br><br>
      <input class="options" type="radio" name="answer3" value="2"><label for="answer3"><?php echo $arr[2]; ?></label> <br><br>
      <input class="options" type="radio" name="answer3" value="3"><label for="answer3"><?php echo $arr[3]; ?></label> <br><br>
      <input class="options" type="radio" name="answer3" value="4"><label for="answer3"><?php echo $arr[4]; ?></label> <br><br>
      <input class="shift-button" type="button" name="Submit" value="previous" id="button3p" ONCLICK="window.location.href='javascript:void(0);'" >
      <input type="button" name="Submit" class="tab1" value="next" id="button3n" ONCLICK="window.location.href='javascript:void(0);'" >
  </div>

  <div id="ques4_content" class="hidden site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
    
      <?php $arr=display_data(3) ?>
      <input type="hidden" name="ques4" value="0">
      <div class="meaning">
            <span>4. Which of the following words mean <?php echo $arr[0];?> </span><br>
          </div>
      <input class="options" type="radio" name="answer4" value="1"><label for="answer4"><?php echo $arr[1]; ?></label> <br><br>
      <input class="options" type="radio" name="answer4" value="2"><label for="answer4"><?php echo $arr[2]; ?></label> <br><br>
      <input class="options" type="radio" name="answer4" value="3"><label for="answer4"><?php echo $arr[3]; ?></label> <br><br>
      <input class="options" type="radio" name="answer4" value="4"><label for="answer4"><?php echo $arr[4]; ?></label> <br><br>
      <input class="shift-button" type="button" name="Submit" value="previous" id="button4p" ONCLICK="window.location.href='javascript:void(0);'" >
      <input type="button" name="Submit" value="next" class="tab1" id="button4n" ONCLICK="window.location.href='javascript:void(0);'" >
     
  </div>

  <div id="ques5_content" class="hidden site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
   
      <?php $arr=display_data(4) ?>
      <input type="hidden" name="ques5" value="0">
      <div class="meaning">
            <span>5. Which of the following words mean <?php echo $arr[0];?> </span><br>
          </div>
      <input class="options" type="radio" name="answer5" value="1"><label for="answer5"><?php echo $arr[1]; ?></label> <br><br>
      <input class="options" type="radio" name="answer5" value="2"><label for="answer5"><?php echo $arr[2]; ?></label> <br><br>
      <input class="options" type="radio" name="answer5" value="3"><label for="answer5"><?php echo $arr[3]; ?></label> <br><br>
      <input class="options" type="radio" name="answer5" value="4"><label for="answer5"><?php echo $arr[4]; ?></label> <br><br>
      <input class="shift-button" type="button" name="Submit" value="previous" id="button5p" ONCLICK="window.location.href='javascript:void(0);'" >
      <input type="button" name="Submit" value="next" class="tab1" id="button5n" ONCLICK="window.location.href='javascript:void(0);'" >
   
  </div>

  <div id="ques6_content" class="hidden site_content" style="height:525px; width:60%; float:left; border: 2px solid #fefefe;">
    
      <?php $arr=display_data(5) ?>
      <input type="hidden" name="ques6" value="0">
      <div class="meaning">
            <span>6. Which of the following words mean <?php echo $arr[0];?> </span><br>
          </div>
      <input class="options" type="radio" name="answer6" value="1"><label for="answer6"><?php echo $arr[1]; ?></label> <br><br>
      <input class="options" type="radio" name="answer6" value="2"><label for="answer6"><?php echo $arr[2]; ?></label> <br><br>
      <input class="options" type="radio" name="answer6" value="3"><label for="answer6"><?php echo $arr[3]; ?></label> <br><br>
      <input class="options" type="radio" name="answer6" value="4"><label for="answer6"><?php echo $arr[4]; ?></label> <br><br>
      <input class="shift-button" type="button" name="Submit" value="previous" id="button6p" ONCLICK="window.location.href='javascript:void(0);'" >
      <input type="submit" class="tab1" value="Finish Quiz">
    
  </div>

</form>


 <script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
  <script>//java src to include jquery library
    
    $("#button1n").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").show("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button2n").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").show("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button3n").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").show("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button4n").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").show("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button5n").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").show("slow");
      }
    );

    $("#button2p").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").show("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button3p").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").show("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button4p").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").show("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button5p").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").show("slow");
        $("#ques5_content").hide("slow");
        $("#ques6_content").hide("slow");
      }
    );

    $("#button6p").click  //pref is the id of preference..an anchor <a> on the top next to home 
    (
      function()  //this function will run when we click on preference
      {
        $("#ques1_content").hide("slow");
        $("#ques2_content").hide("slow");
        $("#ques3_content").hide("slow");
        $("#ques4_content").hide("slow");
        $("#ques5_content").show("slow");
        $("#ques6_content").hide("slow");
      }
    );
  
 

  </script>
        
    




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

