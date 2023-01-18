<?php
	session_start();
	include "../conn.php";
	// include 'function.php';
	// check_timeout();
	// wa_auth();

	if(isset($_GET['id']) AND intval($_GET['id']) > 0){
		$id = $_GET['id'];

		$sql = "UPDATE inquery 
        set
         `status`=1
        WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			$delete_mode = true;
		}
		else {
			$delete_mode = false;
		}
	}
	else{
		$delete_mode = false;
	}
	
	if($delete_mode){
		header('Location: http://localhost/ecommerce/admin/inqueries.php?type=success&msg='.urlencode("inqueries updated"));
	}
	else{
		header('Location: http://localhost/ecommerce/admin/inqueries.php?type=error&msg='.urlencode("Invalid inqueries found"));
	}
	die();
?>