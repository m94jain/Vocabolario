<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];
require_once('/jpgraph-3.5.0b1/src/jpgraph.php');
require_once('/jpgraph-3.5.0b1/src/jpgraph_pie.php'); 
require_once ('jpgraph-3.5.0b1/src/jpgraph_pie3d.php');
 
//$data = array(40,60,31);
$data = array();
$beg = mysql_query("SELECT * from $uniqueid where (rightans/asked)<0.6 AND asked>0");
$beg_count = mysql_num_rows($beg);


$int = mysql_query("SELECT * from $uniqueid where ((asked<5 AND (rightans/asked)>0.6) AND asked>0) OR (asked>5 AND ((rightans/asked)>0.6 AND (rightans/asked<0.8))) ");
$int_count = mysql_num_rows($int);
$c=0;
$mastered = mysql_query("SELECT * from $uniqueid where  asked>5 AND (rightans/asked)>0.8");
$mastered_count = mysql_num_rows($mastered);
if($beg_count==0 && $int_count==0 && $mastered_count==0)
{
	header("Location:pie_not_available.php");
}
if($beg_count!=0)
{	
$data[0] = $beg_count;
//$c++;
}
else
$data[0]=0;
if($int_count!=0)
{	
$data[1] = $int_count;
//$c++;
}
else
$data[1]=0;
if($mastered_count!=0)
{	
$data[2] = $mastered_count;
//$c++;
}
else
$data[2]=0;
/*$data[1] = $int_count;
$data[2] = $mastered_count;*/

// A new pie graph
$graph = new PieGraph(600,700);
$graph->SetShadow();
$graph->SetColor('#cccccc');

// Title setup
/*$graph->title->Set("Adjusting the label pos");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
*/

// Setup the pie plot
$p1 = new PiePlot($data);

// Adjust size and position of plot
$p1->SetSize(0.4);
$p1->SetCenter(0.5,0.0);
$p1->ExplodeAll(10);
$p1->SetShadow();

// Setup slice labels and move them into the plot

$p1->value->SetFont(FF_ARIAL,FS_BOLD,13);
$p1->value->SetColor('white');
$p1->SetLabelPos("auto");
$p1->SetLabelType(PIE_VALUE_ADJPER); 
$p1->value->HideZero();

$legends = array("novice","intermediate","mastered"); 
$p1->SetLegends($legends);
$graph->legend->Pos(0.0,0.05);
$graph->legend->SetColumns(1);
$graph->legend->SetFont(FF_ARIAL,FS_BOLD,13);


// Finally add the plot
$graph->Add($p1);
if($beg_count!=0 || $int_count!=0 || $mastered_count!=0)
unlink("../images/pie.png");
// ... and stroke it
$graph->Stroke('../images/pie.png');

?>