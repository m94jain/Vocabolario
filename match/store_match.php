<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$match_table="match_".$_SESSION['id'];

//check whether user is not pressing back button after game completion 

//$createtemp=mysql_query("CREATE TABLE $matchid (sno INT,)");

if($_SESSION['match_played']==0)
{
	$count=0;
	for($i=0;$i<5;$i++)
	{
		if($_POST['mat'.$i]>=1 && $_POST['mat'.$i]<=5)
		{
			++$count;
		}
	}

	if($count<5)	//if any input is invalid ..go back to match_look
	{
		$_SESSION['msg']=1;
	header("Location:match_look.php");

	}
	else
	$_SESSION['match_played']=1;

for($i=0;$i<5;$i++)	//else store the user answers in try 
	{
	
			$w[$i]=$_POST['mat'.$i]-1;	//storing users answers
			mysql_query("UPDATE $match_table SET try='$w[$i]' where sno=$i");	//updating try values

		
		
	}
}
		$showword=mysql_query("select * from $match_table");
		for($i=0;$i<5;$i++)
	{
		$result=mysql_fetch_array($showword);
		$word[$i]=$result['words'];	//getting words from table
		$corcol=$result['correct'];		//getting correct column 
		$w[$i]=$result['try'];		//getting user answer col
		
		//store user answers in array
		$show=mysql_query("select * from $match_table where Sno='$w[$i]' ");//w[i] is precomputed above..no need to fetch from database
		$result=mysql_fetch_array($show); //user answer
		$userans[$i]=$result['meanings'];
		
		//store correct answers in array 
		$showmean=mysql_query("select * from $match_table where Sno='$corcol' ");
		$res=mysql_fetch_array($showmean);//correct answer
		$correctans[$i]=$res['meanings'];
	}	

?>

<!-- html code -->

<?php
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
      font-size: 25px;
      font-weight:600;
      padding-left: 5px;
      color:#8AC007;
      font-family:'Pompiere';

    }

     .correct{
      font-size: 30px; 
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

       <div  style="height:540px; width:60%; float:left;font-family:'Pompiere'; font-size:40px; font-weight:500;background:url(matchpaper.png);">
       	  <table rules="all"  width="700" style="margin-top:70px; border: 1px solid black; margin-left:50px;">
          <tr class="row_style_heading">
            <td class=" heading"><span>Question</span></td>
            <td class=" heading"><span style="color:#252525;">Correct Answer:</span></td>
            <td class=" heading" ><span>Your Answer:</span></td>
          </tr>

          <tr class="row_style">
            <td class=" correct"><?php echo $word[0]."<br>"; ?></td>
            <td class=" question"><?php echo $correctans[0]."<br>";?></td>
            <td class=" question"><?php 
            if(strcmp($correctans[0],$userans[0])==0)
            {
              echo "<div style='color:#8AC007;'>$userans[0]</div>";
            }
            if(strcmp($correctans[0],$userans[0])!=0)
            {
              if(strcmp("Unattempted",$userans[0])==0)
              {
                echo "<div style='color:#252525;'>$userans[0]</div>";
              }
              else
              {
                echo "<div style='color:#BB0400;'>$userans[0]</div>";
              }
            }
            ?>
            </td>
          </tr>

          <tr class="row_style">
            <td class=" correct"><?php echo $word[1]."<br>"; ?></td>
            <td class=" question"><?php echo $correctans[1]."<br>";?></td>
            <td class=" question"><?php 
            if(strcmp($correctans[1],$userans[1])==0)
            {
              echo "<div style='color:#8AC007;'>$userans[1]</div>";
            }
            if(strcmp($correctans[1],$userans[1])!=0)
            {
              if(strcmp("Unattempted",$userans[1])==0)
              {
                echo "<div style='color:#252525;'>$userans[1]</div>";
              }
              else
              {
                echo "<div style='color:#BB0400;'>$userans[1]</div>";
              }
            }
            ?>
            </td>
          </tr>

          <tr class="row_style">
            <td class=" correct"><?php echo $word[2]."<br>"; ?></td>
            <td class=" question"><?php echo $correctans[2]."<br>";?></td>
            <td class=" question"><?php 
            if(strcmp($correctans[2],$userans[2])==0)
            {
              echo "<div style='color:#8AC007;'>$userans[2]</div>";
            }
            if(strcmp($correctans[2],$userans[2])!=0)
            {
              if(strcmp("Unattempted",$userans[2])==0)
              {
                echo "<div style='color:#252525;'>$userans[2]</div>";
              }
              else
              {
                echo "<div style='color:#BB0400;'>$userans[2]</div>";
              }
            }
            ?>
            </td>
          </tr>

          <tr class="row_style">
            <td class=" correct"><?php echo $word[3]."<br>"; ?></td>
            <td class=" question"><?php echo $correctans[3]."<br>";?></td>
            <td class=" question"><?php 
            if(strcmp($correctans[3],$userans[3])==0)
            {
              echo "<div style='color:#8AC007;'>$userans[3]</div>";
            }
            if(strcmp($correctans[3],$userans[3])!=0)
            {
              if(strcmp("Unattempted",$userans[3])==0)
              {
                echo "<div style='color:#252525;'>$userans[3]</div>";
              }
              else
              {
                echo "<div style='color:#BB0400;'>$userans[3]</div>";
              }
            }
            ?>
            </td>
          </tr>

          <tr class="row_style">
            <td class=" correct"><?php echo $word[4]."<br>"; ?></td>
            <td class=" question"><?php echo $correctans[4]."<br>";?></td>
            <td class=" question"><?php 
            if(strcmp($correctans[4],$userans[4])==0)
            {
              echo "<div style='color:#8AC007;'>$userans[4]</div>";
            }
            if(strcmp($correctans[4],$userans[4])!=0)
            {
              if(strcmp("Unattempted",$userans[4])==0)
              {
                echo "<div style='color:#252525;'>$userans[4]</div>";
              }
              else
              {
                echo "<div style='color:#BB0400;'>$userans[4]</div>";
              }
            }
            ?>
            </td>
          </tr>
</table>
        
		</div>
		
		<form action="savescore.php">
		<input type="submit" value="Save Score" name="save" style="margin-left:-125px; margin-top:520px">
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

