<?php
include("./_session.php");
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Inventory | Admin Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body class="w3-light-grey">


<?php
include("_navigation.php");
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Inventory Management</b></h5>
  </header>
  <div class="w3-container">
  <button class="w3-button w3-dark-grey">Add Inventory  <i class="fa fa-arrow-right"></i></button>

  
  </div>

</div>
<script src="./app.js"></script>
</body>
</html>