<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
include 'answer_review_compute.php';
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/
    .row_style
    {
      height:60px;
    }
    .question
    {
      font-size: 25px;
      font-weight:600;
    }
    .correct{
      font-size: 30px; 
      font-weight:900; 
      color:#8AC007;
      font-family:'Pompiere';
    }
    .answered{
      font-size: 30px;
      font-weight:900;
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
<div style="height:550px; width:100%; float:left; font-family:'Pompiere'; color:#fefefe; ">
      <div style="height:550px; width:20%; float:left;">
          <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../homepage after login/home.php"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="drop_table_flashcards.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="drop_table_games.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="#"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="#"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
      </div>
      <div id="review_display" style="height:525px; width:60%; float:left; border: 2px solid #fefefe; background:url(../images/mcq11.png);">
        <table rules="all"  width="700" style="margin-top:50px; border: 1px solid black; margin-left:50px;">
          <tr class="row_style">
            <td class=" question"><span>Word asked for:</span></td>
            <td class=" correct"><span style="color:#252525;">Correct Answer:</span></td>
            <td class=" answered" ><span>Your Answer:</span></td>
          </tr>

          <tr class="row_style">
            <td class=" question"><?php echo $meaning[0] ?></td>
            <td class=" correct"><?php echo $correct[0]?></td>
            <td ><?php 
            if(strcmp($correct[0],$user_ans[0])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[0]</div>";
            }
            if(strcmp($correct[0],$user_ans[0])!=0)
            {
              if(strcmp("Unattempted",$user_ans[0])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[0]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[0]</div>";
              }
            }
         ?></td>
          </tr>

          <tr class="row_style">
            <td class=" question"><?php echo $meaning[1] ?></td>
            <td class=" correct"><?php echo $correct[1]?></td>
            <td ><?php 
            if(strcmp($correct[1],$user_ans[1])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[1]</div>";
            }
            if(strcmp($correct[1],$user_ans[1])!=0)
            {
              if(strcmp("Unattempted",$user_ans[1])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[1]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[1]</div>";
              }
            }
         ?></td>
          </tr>

          <tr class="row_style">
            <td class=" question"><?php echo $meaning[2] ?></td>
            <td class=" correct" ><?php echo $correct[2]?></td>
            <td ><?php 
            if(strcmp($correct[2],$user_ans[2])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[2]</div>";
            }
            if(strcmp($correct[2],$user_ans[2])!=0)
            {
              if(strcmp("Unattempted",$user_ans[2])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[2]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[2]</div>";
              }
            }
         ?></td>
          </tr>

          <tr class="row_style">
            <td  class=" question"><?php echo $meaning[3] ?></td>
            <td class=" correct"><?php echo $correct[3]?></td>
            <td ><?php 
            if(strcmp($correct[3],$user_ans[3])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[3]</div>";
            }
            if(strcmp($correct[3],$user_ans[3])!=0)
            {
              if(strcmp("Unattempted",$user_ans[3])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[3]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[3]</div>";
              }
            }
         ?></td>
          </tr>

          <tr class="row_style">
            <td class=" question"><?php echo $meaning[4] ?></td>
            <td class=" correct"><?php echo $correct[4]?></td>
            <td ><?php 
            if(strcmp($correct[4],$user_ans[4])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[4]</div>";
            }
            if(strcmp($correct[4],$user_ans[4])!=0)
            {
              if(strcmp("Unattempted",$user_ans[4])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[4]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[4]</div>";
              }
            }
         ?></td>
          </tr>

          <tr class="row_style">
            <td class=" question"><?php echo $meaning[5] ?></td>
            <td class=" correct"><?php echo $correct[5]?></td>
            <td ><?php 
            if(strcmp($correct[5],$user_ans[5])==0)
            {
              echo "<div style='font-size: 30px; font-weight:900; color:#8AC007;font-family:'Pompiere';'>$user_ans[5]</div>";
            }
            if(strcmp($correct[5],$user_ans[5])!=0)
            {
              if(strcmp("Unattempted",$user_ans[5])==0)
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#252525;font-family:'Pompiere';'>$user_ans[5]</div>";
              }
              else
              {
                echo "<div style='font-size: 30px; font-weight:900; color:#BB0400;font-family:'Pompiere';'>$user_ans[5]</div>";
              }
            }
         ?></td>
          </tr>
        </table>
        <form action="drop_table.php">
          <input type="submit" value="finished quiz" style="margin-left:700px; margin-top:5px;">
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
</html>