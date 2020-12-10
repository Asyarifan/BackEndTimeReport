<?php
	require "connect.php";
	
	$queryResult=$con->query("SELECT project,activity,date,time,remark FROM activity");
	
	$result = array();

	while($fetchData=$queryResult->fetch_assoc()){
		$result[] = $fetchData;
	}
	
	echo json_encode($result);

?>