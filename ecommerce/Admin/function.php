<?php
function check_timeout(){
$datetime_1 = $_SESSION['time'];
$datetime_2 = date("Y-m-d h:i:s");

$start_datetime = new DateTime($datetime_1);
$diff = $start_datetime->diff(new DateTime($datetime_2));

if($diff->i > 5){
    header("location: http://localhost/ecommerce/admin/_end_session.php");
}
}

function getProductId($id){
    $_SESSION['currentProductId'] = $id;
    header("location: http://localhost/ecommerce/productDetails.php");
}


function wa_auth(){
	if(!isset($_SESSION['email'])){
	  header('Location: http://localhost/ecommerce/admin/login.php');
	}
	else{
		return true;
	}
}

?>