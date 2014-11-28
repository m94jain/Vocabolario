<html>
<?php
  $msg="";
 $word_dic="";
 $meaning_dic="";
$passer="";
$userer="";
$unknownuser="";
$fillf="";
$invem="";
$passmat="";
$exists="";
 include('randomword.php');
 include('findword.php');
include('connectivity.php');
include('insertsql.php');
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
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'> 
  <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'> 
 <!-- style sheet for login -->
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
 


<header>
  <div class="upper" style="width:105%;  float:left; background-color:#282D30;overflow:hidden; margin: -.5% -.6% 0px -.5%;">
    <div id="logo" style="width:25%; height:65px; float:left;">
      <img src="images/logo.png" style="margin-top:-28px">
    </div>
    <div style="width:65%; height:70px; float:right;"> 
	    <div style="width:40%; height:70px; float:left;">
       
      </div>
      <div style="margin-top:20px; width:55%; height:70px; float:left; vertical-align:bottom; "> 
	     <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current" id="link"><a id="home" href="vocab.php">Home</a></li>
          
          
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
  <div style="width:5%; height:300px;float:left;"> 
   <!--div part1 the white space before blue box.. on its left-->
		
	 </div>

 <!-- log in dabba starts here -->
	<div id="sign_content" class="wrapper" style="background: url(../images/skulls.png); width:55%; float:left;" >
    
		<!--class wrapper includes all the forms -->
			
			<div class="content">
				<div id="form_wrapper" class="form_wrapper" style="width:450px">
					
					<form name="Form" class="login active"  method="POST"  >
						<h3>Login</h3>
				<p style="color:red;float:right"><?php echo $unknownuser; ?> </p>
						<div>
						<label>User(Email):</label>
						
							<input type="text" name="user"/>
						<p class="fault" id="usererror"> <?php echo $userer?> </p>
						</div>
						<div>
							<label>Password: <a href="forgot_password.html" rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
							<input type="password" name="pass"/>
							<p class="fault" id="passerror" > <?php echo $passer?></p>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
							<input type="submit" name="login" value="Login"></input>
							<a href="signup.php" >You don't have an account yet? Register here</a>
							<div class="clear"></div>
						
		</div>
						

					</form>
				
				</div>
				<div class="clear"></div>
		</div>
		
    </div>


	
	<div id="dictionary" class="dict" style="margin-top:10px; margin-right:100px;">
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


 
		<!--the word of the day dabba starts here -->
		<div id="wordday" class="wordday" style="margin-top:1px; margin-right:100px;">
		<div class="innerwordday" style="font-family:'Open Sans condensed';font-size:23px" >WORD OF THE DAY</div><br>
	
		<div class="word">
		<?php echo $word;?>
			</div>
		<div class="meaning">
		<b><?php echo $meaning;?> </b>
		</div>
			<img src="images/book.png" style="margin:auto 50px"> </src>
	</div>
</div>




		
</html>

