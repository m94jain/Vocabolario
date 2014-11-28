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
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Setting" selected="selected">Settings  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:475px; width:100%; float:left; font-family:'Puritan';  ">
	<div style="height:550px; width:20%; float:left;">
        <!--shift div-->
      </div>
      <div style="height:20px; width:60%; float:left;">
        <!--shift div-->
      </div>

       <div  style="height:500px; width:60%; float:left;font-family:'Pompiere'; font-size:40px; font-weight:500; background:url(mcq11.png);">
        <br>
        <br>
        <br>
        <span style="display:block;word-wrap:word-break;width:15em;margin-left:150px;">
         Get to know some new words through our flashcards and come back to take the quiz!! </span>
         <button onclick="location.href ='../flashCards/meanings_flashcard_look.php'" style="margin-left:300px; margin-top:50px;">Take me to flashcards!</button>
       </div>


	</div>

	
</body>
</html>

