<?php
include("./_session.php");
function addProductToCart($productDetails){
    array_push($_SESSION['products'], $productDetails);
}
?>