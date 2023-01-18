<?php

use LDAP\Result;
include("./_session.php");
include("../conn.php");

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

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
            <h5><b><i class="fa fa-dashboard"></i> Users Management</b></h5>
        </header>
        <div class="w3-container">
            <a href="./add_user.php"><button class="w3-button w3-dark-grey">Add User  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <div class="w3-container">
            <!-- user listing -->
            <?php

            $sql = "select * from users;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
            ?>
                <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Options</th>

                </tr>
            
                <?php
                $count = 0;
                while($row = mysqli_fetch_assoc($result)){
                    // print_r($row);
                    $count++;
                ?>
            
                <tr>
                    <td><?php echo $count?></td>
                    <td><?php echo $row["first_name"]?></td>
                    <td><?php echo $row["last_name"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["phone"]?></td>
                    <td><?php echo $row["password"]?></td>
                    <td><?php echo $row["status"]?></td>
                    <td><?php echo $row["created_on"]?></td>
                    <td> <a href="./editUser.php?id=<?php echo $row["id"]?>"><i class="bi bi-pencil-square text-black"></i></a> <a href="./deleteUser.php?id=<?php echo $row["id"]?>"><i class="bi bi-trash3 text-black"></i></a></td>

                </tr>
            
            <?php
                }
            ?>
            </table>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="./app.js"></script>
</body>

</html>