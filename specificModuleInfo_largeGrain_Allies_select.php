<?php
// Ruth Shaffer
// Pull large-grain data from MySQL database for graphing
// Former Allied countries only
		
require 'database.php';
		   
//Selects data from each included country
$stmt = $mysqli->prepare("SELECT EventName,Australia,Canada,China,France,NewZealand,Russia,UK,US FROM collectiveMemoryTableLargeGrain");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->execute();
$stmt->bind_result($EventName,$Australia,$Canada,$China,$France,$NewZealand,$Russia,$UK,$US);

while($stmt->fetch()){			  
	$fullData[] = array (
	'EventName' => $EventName,
	'Australia' => $Australia,
	'Canada' => $Canada,
	'China' => $China,
	'France' => $France,
	'NewZealand' => $NewZealand,
	'Russia' => $Russia,
	'UK' => $UK,
	'US' => $US
	);
}; 
$stmt->close();
			 
print json_encode($fullData);
			
?>