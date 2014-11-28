<html>
<?php
  $msg="";
 $word_dic="";
 $meaning_dic="";
$passer="";
$userer="";
 include('randomword.php');
 include('findword.php');
$_SESSION['fname']="nobody";
?>
<head>
  <title>
    Vocabolario
  </title>
<!--
  <style>
    div 
    {
      border: 2px solid;
      border-radius: 0px;
    }-->
  </style>
<link rel="stylesheet" type="text/css" href="css/learnmore.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
   <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'> 
  <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'> 
 <!-- style sheet for login -->
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
 


<header>
  <div class="upper" style="width:105%;  float:left; background-color:#252525;overflow:hidden; margin: -.5% -.6% 0px -.5%;">
    <div id="logo" style="width:30%; height:65px; float:left;">
      <img src="images/logo.png" style="margin-top:-28px">
    </div>
    <div style="width:65%; height:65px; float:right;"> 
	    <div style="width:50%; height:65px; float:left;">
       
      </div>
      <div style="margin-top:20px; width:49%; height:65px; float:left; vertical-align:bottom; "> 
	     <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current" id="link"><a id="home" href="javascript:void(0)">Home</a></li>
          
          
          <li><a id="sign-in" href="login.php">Sign in</a></li>
           <li><a id="sign-up" href="signup.php">Sign up</a></li>
        </ul>
        </nav> 
      </div>
    </div>
  </div>
<!--<div id ="line" style="clear:both;">
   <hr style="color: #ffffff; background: #ffffff; width: 100%; height: 1px; border: 0; ">
</div>-->
</header>

<div class="lower" style="width:100%; float:left">
  <div style="width:3%; height:300px;float:left;"> 
   <!--div part1 the white space before blue box.. on its left-->
		
	 </div>
	<!--the white dabba for home starts here-->
	<div id="home_content" class="homebox" style="float:left">
	<div class="howbox" style="float:left;">
	<img src="images/how.png"> </img>
    <img style="float:right" src="images/anim.gif"> </img>
	
	<br><br><br><br><p style="font-family:'Puritan; letter-spacing:1.5em;">TRY OUT THE DEMOS TO KNOW WHAT YOU ARE UP FOR!!</p>
	</div>
 
	</div>
	
	<div id="dictionary" class="dict">
	<div class="dictinner" style="font-family:'Open Sans condensed';font-size:23px">
	SEARCH FOR A WORD
	</div>
	<div style="margin:20px">
	<form  method="post">
	<input type="text" name="searchword" style="border-radius:4px;height:25px"></input>
 <!-- <input type="image" src="images/glass.ico" alt="Submit" width="28" height="21">-->
  <input type="submit" name="submit" value="search"></input>
	</form >
	<div id="dictword"<?php if(!isset($_POST['submit'])) echo'style="display:none"'; ?>> 
	<b><?php echo $msg."<br>";
	echo $word_dic."<br><br>";
	echo $meaning_dic;?><b>
	</div>
	</div>

	</div>

	<div>
	    <ul class="ca-menu">
                    <li class="menu1">
                        <a id="learnmore" href="demo flashcards/demo_flashcard_look.php">
                          <span class="ca-icon"><img src="vocab_flash.png" style="margin-top:28px;"></span>
                       </a>
                    </li style="background:#F53B3B">
                    <li class="menu2">
                        <a href="javascript:void(0);">
                            <span class="ca-icon"><img src="vocab_mcq.png" style="margin-top:15px;"></span>
                        </a>
                    </li>
                    <li class="menu3">
                        <a href="javascript:void(0);">
                            <span class="ca-icon"><img src="vocab_mtc.png" style="margin-top:19px;"></span>
                        </a>
                    </li>
                  
                   
                </ul>
						

            </div><!-- content -->
		<!--the word of the day dabba starts here -->
	<div id="wordday" class="wordday">
	<div class="innerwordday" style="font-family:'Open Sans condensed';font-size:23px" >WORD OF THE DAY</div><br>
	
	<div class="word">
	<?php echo $word;?>
	</div>
	<div class="meaning">
	<b><?php echo $meaning;?> </b>
	</div>
		<img src="images/book.png" style="margin:10px 65px 40px 65px"> </src>
	</div>
  
		
</html>

