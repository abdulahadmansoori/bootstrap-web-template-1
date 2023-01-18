<?php
include("./_session.php");
include("../conn.php");

if(count($_POST) > 0){
    $first_name  = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $recStatus;
    $msg;
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES ('" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $phone . "', '" . $password . "');";
    if (assert($first_name)) {
        if (mysqli_query($conn, $sql)) {
            $msg ="New record added <br>";
            // printRecord($conn,"users");
            $recStatus = true;
        } else {
            $msg = "error : " . mysqli_error($conn);
            $recStatus = false;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Users | Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right">Logo</span>
    </div>

    <?php
    include("_navigation.php");
    ?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> Users Management</b></h5>
        </header>
        <div class="w3-container">
        <a href="./users.php"><button class="w3-button w3-dark-grey">View Users  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <?php 
    if(count($_POST) > 0)
    {
      if($recStatus == true)
      {
        echo '<div class=" alert alert-success">'.$msg.'<strong>Success!</strong> </div>';
      }
      else{
        echo '<div class=" alert alert-danger">'.$msg.'<strong>Error!</strong> </div>';
      }
    }
    ?>
        
        <form action="add_user.php" method="POST" >
            <h1>Register User</h1>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" required>
            <!-- <br> -->
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" required>
            <!-- <br> -->
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <!-- <br> -->
            <label for="phone">Phone</label>
            <input type="text" name="phone" required>
            <!-- <br> -->
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <button type="submit">Submit</button>
        </form>
    </div>

    </div>
</body>

</html>