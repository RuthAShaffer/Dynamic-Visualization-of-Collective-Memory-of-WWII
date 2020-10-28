<?php
// Ruth Shaffer
// Pull large-grain data from MySQL database for graphing
// Former Axis countries only
		
require 'database.php';
		   
//Selects data from each included country
$stmt = $mysqli->prepare("SELECT EventName,Germany,Italy,Japan FROM collectiveMemoryTableLargeGrain");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->execute();
$stmt->bind_result($EventName,$Germany,$Italy,$Japan);

while($stmt->fetch()){			  
	$fullData[] = array (
	'EventName' => $EventName,
	'Germany' => $Germany,
	'Italy' => $Italy,
	'Japan' => $Japan
	);
}; 
$stmt->close();
			 
print json_encode($fullData);
			
?>