<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
if($_SESSION['match_played']==1)
header("Location:store_match.php");
include'setwords_match.php';

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

     .row_style
    {
      height:75px;
    }

    .row_style_heading{
    	height:45px;
    }

    .heading{
    	font-size: 25px;
    	font-weight: 700;
    	font-family: 'Pompiere';
    	text-align: center;
    }

     .question
    {
      font-size: 20px;
      font-weight:600;
      padding-left: 5px;
    }

     .correct{
      font-size: 25px; 
      font-weight:700; 
      color:#252525;
      font-family:'Pompiere';
    }

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
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="common.css" />
   <link rel="stylesheet" href="../nav_bar/css/style.css" />
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
		 <option value="../homepage after login/account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:475px; width:100%; float:left; font-family:'Puritan';  ">
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

       <div  style="height:500px; width:60%; float:left;font-family:'Pompiere'; font-size:40px; font-weight:500; background:url(matchpaper.png); margin-top:30px;">
		
		<table rules="all"  width="750" style="margin-top:45px; border: 1px solid black; margin-left:25px;">
		<form action="store_match.php" method="post">

			   <tr class="row_style_heading">
            <td class="heading" width="150">Column A</td>
            <td class="heading">Column B</td>
            
          </tr>
		
		    <tr class="row_style">
            <td class=" correct" width="150"><?php echo "<input type='text' name='mat0'style='width:17px'>".$word[0]."<br>";?></td>
            <td class=" question"> <?php echo (1).".".$meaning[0]."<br>"; ?></td>
            
          </tr>

		    <tr class="row_style">
            <td class=" correct" width="150"><?php echo "<input type='text' name='mat1'style='width:17px'>".$word[1]."<br>";?></td>
            <td class=" question"> <?php echo (2).".".$meaning[1]."<br>"; ?></td>
            
          </tr>

		    <tr class="row_style">
            <td class=" correct" width="150"><?php echo "<input type='text' name='mat2'style='width:17px'>".$word[2]."<br>";?></td>
            <td class=" question"> <?php echo (3).".".$meaning[2]."<br>"; ?></td>
            
          </tr>

		    <tr class="row_style">
            <td class=" correct" width="150"><?php echo "<input type='text' name='mat3'style='width:17px'>".$word[3]."<br>";?></td>
            <td class=" question"> <?php echo (4).".".$meaning[3]."<br>"; ?></td>
            
          </tr class="row_style">

		    <tr class="row_style">
            <td class=" correct" width="150"><?php echo "<input type='text' name='mat4'style='width:17px'>".$word[4]."<br>";?></td>
            <td class=" question"> <?php echo (5).".".$meaning[4]."<br>"; ?></td>
            
          </tr>
      </table>
		<input type="submit" value="Submit" name="submit" style="margin-left:720px; margin-top:6px;">
		</form>
		<?php  if($_SESSION['msg']==1)
			echo"<p style='color:red; margin-top:-550px; margin-left:300px;'>Invalid Input</p>";?>
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

