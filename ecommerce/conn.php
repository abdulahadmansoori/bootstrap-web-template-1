<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "connect failed : ".mysqli_connect_error()."<br>";
    die();
}
?>