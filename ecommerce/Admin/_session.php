<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: http://localhost/ecommerce/admin/login.php');
}
?>