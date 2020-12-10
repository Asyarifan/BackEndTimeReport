<?php
	require "connect.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();


    $project = $_POST['project'];
    $activity = $_POST['activity'];
	$date = $_POST['date'];
    $time = $_POST['time'];
    $remark = $_post['remark']


    $insert = "INSERT INTO activity value('$project','$activity','$date','$time','$remark',NULL)"

    if(mysqli_query($con, $insert)){
    	$response['value'] = 1;
    	$response ['message'] = "Add Activity Success";
    	echo json_encode($response);
    }else {
    	$response['value'] = 0;
    	$response ['message'] = "Add Activity Failed";
    	echo json_encode($response);
    }

}


?>