<?php
include("./_session.php");

include("../conn.php");

if (count($_POST) > 0) {
    // File Uploading Script Start
    $target_dir = "../images/";
    $filename = rand(11111, 999999) . basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $image_path = "images/";
        $filename = $filename;
    } else {
        $image_path = "images/";
        $filename = "img1.jpg";
    }

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $image = $filename;
    $image_path = $image_path;
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    // $p_img_01 = addslashes(file_get_contents($_FILES['p_img_01']['tmp_name']));
    // $p_img_02 = addslashes(file_get_contents($_FILES['p_img_02']['tmp_name']));
    // $p_img_03 = addslashes(file_get_contents($_FILES['p_img_03']['tmp_name']));
    $recStatus;

    $sql = "INSERT INTO products (name, category, price, quantity, description, image, image_path) values('" . $name . "','" . $category . "','" . $price . "','" . $quantity . "','" . $description ."','".$image."','".$image_path."');";
    if (assert($name)) {
        if (mysqli_query($conn, $sql)) {
            $msg = "product sucessfully added <br>";
            $recStatus = true;
            // printRecord($conn,"products");
        } else {
            $msg = "product not sucessfully added | error : " . mysqli_error($conn);
            $recStatus = false;
        }
    } else {
        echo "please fill all required feilds";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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
            <h5><b><i class="fa fa-dashboard"></i> ADD PRODUCT</b></h5>
        </header>
        <div class="w3-container">
            <a href="./products.php"><button class="w3-button w3-dark-grey">View Products  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <?php
        if (count($_POST) > 0) {
            if ($recStatus == true) {
                echo '<div class=" alert alert-success">' . $msg . '<strong>Success!</strong> </div>';
            } else {
                echo '<div class=" alert alert-danger">' . $msg . '<strong>Error!</strong> </div>';
            }
        }
        ?>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <h1>Add Product</h1>
            <label for="name">Product Name</label>
            <input type="text" name="name" required>
            <br>
            <label for="category">Category</label>
            <input type="text" name="category" required>
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" required>
            <br>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" required>
            <br>
            <div class="row">
                <div class="col-sm-10">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" name="description" style="width:100%; height:200px;"></textarea>
                </div>
                <div class="col-sm-2">
                    <label for="main_img">Primary Images</label>
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" required>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>