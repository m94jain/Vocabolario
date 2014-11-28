<html>

<?php 
include 'demo_meaning_flashcards.php';
?>
<head>
   <style>
    /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/
	
	.homebut
{	

	width:120px;
	background: #e3e3e3;
	border: 1px solid #ccc;
	color: #333;
	font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
	font-size: 14px;
	font-weight: bold;
	
	text-align: center;
	
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
   <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Cabin Condensed' rel='stylesheet' type='text/css'>
</head>

<body style="background:url(../images/4.png);">
    <div style="height:70px; width:100%; float:left;">
	    <div style="width:30%; height:70px; float:left;">
		    <img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
	    </div>
	    <div style="width:50%; height:70px; float:left;">
	    </div>
    </div>
    
    <div style="height:475px; width:100%; float:left; font-family:'Puritan';  ">
        <div id="f1_container" style="float:left;">
            <div id="f1_card" class="shadow" >
                <div class="face" id="change1" >
                	<table  style="width:100% ; margin-left:20px; font-size:25px; font-family:'Cabin Condensed';">
                        <tr>
                <td height="48" width="2%">1.</td><td height="48" width="98%"> <?php echo $word[0];?></td>
              </tr> 
                        <tr>
                <td height="48" width="2%">2.</td><td height="48" width="98%"> <?php echo $word[1];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">3.</td><td height="48" width="98%"> <?php echo $word[2];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">4. </td><td height="48" width="98%"><?php echo $word[3];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">5. </td><td height="48" width="98%"><?php echo $word[4];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">6.</td><td height="48" width="98%"> <?php echo $word[5];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">7.</td><td height="48" width="98%"> <?php echo $word[6];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">8.</td><td height="48" width="98%"> <?php echo $word[7];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">9. </td><td height="48" width="98%"><?php echo $word[8];?></td>
              </tr>
              <tr>
                <td height="48" width="2%">10.</td><td height="48" width="98%"> <?php echo $word[9];?></td>
              </tr>
            </table>
           
                </div>
                <div class="face back" id="change2" style="overflow:scroll;" >
                	<table  border=0 rules=rows  style="width:auto; font-family:'Cabin Condensed';  border-collapse: collapse;">
              <tr>
                <td height="30" width="30%" style="font-size:18px;"><?php echo $word[0];?> -</td>
                <td height="30" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[0];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[1];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[1];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[2];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[2];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[3];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[3];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[4];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[4];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[5];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[5];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[6];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[6];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[7];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[7];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[8];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[8];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[9];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[9];?></td>
              </tr>
            </table>
                </div>  
            </div> 
        </div>
        <button class="homebut" onclick="location.href ='../vocab.php'" style="margin-top:500px; margin-left:50px;">Home</button>
    </div>

</body>

  </html>

