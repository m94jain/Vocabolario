<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//session_start();
$graph = "graph_".$_SESSION['id'];


 require_once('/jpgraph-3.5.0b1/src/jpgraph.php');
 require_once('/jpgraph-3.5.0b1/src/jpgraph_line.php'); 
 //  data
$ydata = array();
for($i=0;$i<5;$i++)
{
	$l=$i+1;
	$fetch_val = mysql_query("select * from $graph where day_no = '$l'");
    $fetch_val_r = mysql_fetch_array($fetch_val);
    $val = $fetch_val_r['value'];
	$ydata[$i] = $val; 
	//echo $ydata[$i];
}


//Create the graph. These two calls are always required
$graph = new Graph(400,350);
$graph->SetScale('textlin');
$graph->xaxis->title->Set("Time");
$graph->yaxis->title->Set("Progress");
$graph->xaxis->HideLabels();
$graph->yaxis->HideLabels();
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->mark->SetFillColor('blue');
$lineplot->mark->SetType(MARK_SQUARE);
$lineplot->SetColor('blue');

// Add the plot to the graph
$graph->Add($lineplot);
unlink("../images/graph.png");
//$graph->mark->SetType(MARK_FILLEDCIRCLE); 
// Display the graph
$graph->Stroke('../images/graph.png');
//get marks(golu)*/
?>
