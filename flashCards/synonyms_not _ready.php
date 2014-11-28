<?php
session_start();
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
  <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body style="background:#252525;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
	</div>
	<div style="width:50%; height:70px; float:left;">
	</div>
	<div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
		 <p ><?php echo "Welcome ".$_SESSION['fname']; ?></p>
	</div>
</div>
<div style="height:475px; width:100%; float:left; font-family:'Puritan';  ">
	<div style="height:550px; width:20%; float:left;">
        <!--shift div-->
      </div>
      <div style="height:20px; width:60%; float:left;">
        <!--shift div-->
      </div>

       <div  style="height:500px; width:60%; float:left;font-family:'Pompiere'; font-size:40px; font-weight:500; background:url(../images/mcq11.png);">
        <br>
        <br>
        <br>
        <span style="display:block;word-wrap:word-break;width:15em;margin-left:150px;">
         Get to know some new words through our flashcards and come back to know about words which mean the same!! </span>
         <button onclick="location.href ='../flashCards/meanings_flashcard_look.php'" style="margin-left:300px; margin-top:50px;">Take me to flashcards!</button>
       </div>


	</div>

	
</body>
</html>

