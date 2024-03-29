<?php
// include("./_session.php");
?>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><?php echo "Hello " . $_SESSION['name'] . " (" . $_SESSION['email'] .")" ?></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./icons/circle-user-solid.svg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
      onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="../index.php" target="_blank" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Visit Website</a>
    <a href="./index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Home</a>
    <a href="./products.php" class="w3-bar-item w3-button w3-padding "><i
        class="fa fa-users fa-fw"></i>  Products Management</a>
        <!-- w3-blue -->
    <a href="./users.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Users
      Management</a>
    <a href="./inventoryManagement.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> 
      Inventory Management</a>
      <a href="./inqueries.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Inquery Management</a>
    <a href="./_end_session.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  LogOut</a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br> -->
  </div>
</nav>