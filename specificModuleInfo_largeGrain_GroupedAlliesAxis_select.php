<?php
// Ruth Shaffer
// Pull large-grain data from MySQL database for graphing
// Allied and Axis countries (combined)
		
require 'database.php';
		
//Selects data from each included country
$stmt = $mysqli->prepare("SELECT EventName,Allies,Axis FROM collectiveMemoryTableLargeGrainCombinedAlliesAxis");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->execute();
$stmt->bind_result($EventName,$Allies,$Axis);

while($stmt->fetch()){
	$fullData[] = array (
	'EventName' => $EventName,
	'Allies' => $Allies,
	'Axis' => $Axis
	);
}; 
				
 $stmt->close();
 print json_encode($fullData);

?>