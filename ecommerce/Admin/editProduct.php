<?php
session_start();
include "../conn.php";
// include './function.php';
// check_timeout();
// wa_auth();

if(count($_POST) > 0)
{
    print_r($_POST);
  // File Uploading Script Start
  $image_path = "images/";
  if(isset($_FILES["fileToUpload"]["name"])){
    $target_dir = "../images/";
    $filename = rand(11111,999999).basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $filename = $filename;
    }
    else {
      $filename = "img1.jpg";
    }
  }
  else{
    $filename = $_POST['image_name'];
  }
  // File Uploading Script End

    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $image = $filename;
    $image_path = $image_path;
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    // $id = intval($_POST['id']);
    

  $sql = "UPDATE products 
    SET 
      `name`='$name' ,
      `category`='$category' ,
      `quantity`='$quantity' ,
      `status`='$status' ,
      `price`='$price',
      `image`='$image' ,
      `image_path`='$image_path' ,
      `description`='$description'
    WHERE id=$id";


//   echo $sql;die; 
  if (mysqli_query($conn, $sql)) {
    $is_insert = true;
    $msg = "Record Updated successfully";
  } else {
    $is_insert = false;
    $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if(isset($_GET['id']) AND intval($_GET['id']) > 0){
  $id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
        // print_r($row);
      $id = $row['id'];
      $name = $row['name'];
      $price = $row['price'];
      $category = $row['category'];
      $quantity = $row['quantity'];
      $status = $row['status'];
      $description = $row['description'];
      $image_name = $row['image'];
      $image = '/ecommerce/'.$row['image_path'].$row['image'];
    }
  } else {
    header('Location: http://localhost/ecommerce/admin/products.php?type=error&msg='.urlencode("Invalid Product found"));
  }
}
else{
  header('Location: http://localhost/ecommerce/admin/products.php?type=error&msg='.urlencode("Invalid Product found"));
}
?>
<html lang="en">

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
            <h5><b><i class="fa fa-dashboard"></i> EDIT PRODUCT DETAILS</b></h5>
        </header>
        <div class="w3-container">
            <a href="./products.php"><button class="w3-button w3-dark-grey">View Products  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <?php
        if (count($_POST) > 0) {
            if ($recStatus == true) {
                echo '<div class=" alert alert-success mx-2">' . $msg . '<strong>Success!</strong> </div>';
            } else {
                echo '<div class=" alert alert-danger mx-2 ">' . $msg . '<strong>Error!</strong> </div>';
            }
        }
        ?>
        <form action="editProduct.php" method="POST" enctype="multipart/form-data">
            <h1>Add Product</h1>
            <label for="id">Product ID</label>
            <input type="text" name="id" value='<?php echo $_GET['id']?>' >
            <br>
            <label for="name">Product Name</label>
            <input type="text" name="name" value='<?=$name?>' required>
            <br>
            <label for="category">Category</label>
            <input type="text" name="category" value='<?=$category?>' required>
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" value='<?=$price?>' required>
            <br>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" value='<?=$quantity?>' required>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <label for="main_img">Primary Images <a href="<?=$image?>" target='_blank'>View Image</a></label>
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" value="<?=$fileToUpload?>">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">active</option>
                        <option value="0">not active</option>
                    </select>
                </div>
                <div class="col-sm-10">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" name="description" id="description" style="width:100%; height:100px;"><?=$description?></textarea>
                </div>
                
            </div>
            <!-- <a href="./products.php"><button class="btn btn-secondary bg-opacity"><i class="bi bi-x-lg"></i> Cancel</button></a> -->
            <button type="submit" class="btn btn-secondary"> Update <i class="bi bi-check2-all"></i></button>
        </form>
    </div>
</body>

</html>