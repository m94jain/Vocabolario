<html>
<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();
$uniqueid="pmd_".$_SESSION['id'];

$word_list= mysql_query("SELECT * from $uniqueid where  asked>5 AND (rightans/asked)>0.8");
$n = mysql_num_rows($word_list);
//put condition 
$u = $_SESSION['once'];
$e=$_SESSION['end'];
$start=$_SESSION['start'];
if($u==0)
{
  $_SESSION['once']=1;
  include 'mast_display_block.php'; 
}
else
{
  include 'mast_display_block.php'; 
}
?>
<head>
   <style>
    /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/
  
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
   <link rel="stylesheet" type="text/css" href="flash.css" media="screen" />
    <link rel="stylesheet" href="../nav_bar/css/style.css" />
   <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Cabin Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

   </head>

<body style="background:url(../images/4.png);">
  
    <div style="height:70px; width:100%; float:left;">
      <div style="width:30%; height:70px; float:left;">
        <img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
      </div>
      <div style="width:50%; height:70px; float:left;">
      </div>
        <div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
     <p style="font-family:'Fjalla One'"><?php echo "Welcome " ?>
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
    <div style="height:475px; width:94%; float:left; font-family:'Puritan';  ">
      <div id="prev_button" style="float:left; width:450px; height:475px;">
        <form action="mastered_compute_dec.php" method="POST" style="margin-top:255px; float:right;" >
        <input type="submit" name="synonyms" value="previous"  <?php  if($start==0) echo "style='display:none;'"; else echo "style='margin-right:85px;'"; ?> > 
      </form>
      </div>

        <div id="f1_container" style="float:left;">
          
            <div id="f1_card" class="shadow" >

                <div class="face" id="change1" >
                  <table  style="width:100% ; margin-left:20px; font-size:25px; font-family:'Cabin Condensed';">
                        <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[0])!=0)echo $k+1,".";?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[0])!=0){echo $word[0];}?></td>
              </tr> 
                        <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[1])!=0)echo $k+2,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[1])!=0)echo $word[1];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[2])!=0)echo $k+3,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[2])!=0)echo $word[2];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[3])!=0)echo $k+4,"."?></td><td height="48" width="98%"><?php if(strcmp("0",$word[3])!=0)echo $word[3];
              if($n==0) echo "<div>No words present in this level. Practice more to get words in this level!</div>";?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[4])!=0)echo $k+5,"."?></td><td height="48" width="98%"><?php if(strcmp("0",$word[4])!=0)echo $word[4];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[5])!=0)echo $k+6,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[5])!=0)echo $word[5];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[6])!=0)echo $k+7,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[6])!=0)echo $word[6];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[7])!=0)echo $k+8,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[7])!=0)echo $word[7];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[8])!=0)echo $k+9,"."?></td><td height="48" width="98%"><?php if(strcmp("0",$word[8])!=0)echo $word[8];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php if(strcmp("0",$word[9])!=0)echo $k+10,"."?></td><td height="48" width="98%"> <?php if(strcmp("0",$word[9])!=0)echo $word[9];?></td>
              </tr>
            </table>
                </div>
                <div class="face back" id="change2" style="overflow:scroll;" >
                  <table  border=0 rules=rows  style="width:auto; font-family:'Cabin Condensed';  border-collapse: collapse;">
              <tr>
                <td height="30" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[0])!=0)echo $word[0].'-';?></td>
                <td height="30" width="70%" style="font-size:17px; font-weight:500; align:right;"><?php if(strcmp("0",$word[0])!=0)echo $meaning[0];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[1])!=0)echo $word[1].'-';?> </td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[1])!=0)echo $meaning[1];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[2])!=0) echo $word[2].'-';?> </td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[2])!=0)echo $meaning[2];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[3])!=0)echo $word[3].'-';?> </td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[3])!=0)echo $meaning[3];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[4])!=0)echo $word[4].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[4])!=0)echo $meaning[4];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[5])!=0)echo $word[5].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[5])!=0)echo $meaning[5];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[6])!=0) echo $word[6].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[6])!=0)echo $meaning[6];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[7])!=0)echo $word[7].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[7])!=0)echo $meaning[7];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[8])!=0) echo $word[8].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[8])!=0)echo $meaning[8];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php if(strcmp("0",$word[9])!=0)echo $word[9].'-';?></td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php if(strcmp("0",$word[9])!=0) echo $meaning[9];?></td>
              </tr>
            </table>
                </div>  
            </div> 
        </div>
        <form action="mastered_compute.php" method="POST" style="margin-top:255px;">
        <input type="submit" name="synonyms" value="next" <?php if($n<=$e+1) echo "style='display:none;'"; else echo "style='margin-left:80px;'"; ?>>
      </form>
    </div>
	
		<div id="select_op">	<!-- selecting a particular page starts here-->

	 <select id="myselect" onchange="getValue()" style="margin-left:1190px; margin-top:-450px;">
	<?php 
	$op=ceil($n/10);
	$v=($e+1)/10;
	$_SESSION['goingfrom']=$v;	//current value of the page ...will be used to decrement or increment if the selected value  in the box is > or < current value respectively
	echo"<option value='".$v."' style='display:none' selected='selected'>".$v."</option>";
	for($i=1;$i<=$op;$i++)
	{
		echo "<option value=".$i.">".$i."</option>";
		
	}
	?>
	</select>
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

<script>
function getValue()
  {
	var x=document.getElementById("myselect").value;
window.location.href="compute_beg.php?i="+x; 
 }
</script>

</body>

  </html>

