<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">

</head>

<body>
<?php
    include("./_session.php");
    include("./_header.php");
    include("./conn.php");
    include("./_main_banner.php");
    // include("./functions.php");
    // $_SESSION['cert'][]= $row['id'];
    // $_SESSION['products']=array();
    if(count($_POST)>0){
        array_push($_SESSION['cert'], [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'image_path' => $_POST['image_path']
        ]);
        // $quantity = $_POST['quantity'];
        print_r($_SESSION['cert']);  
        // header('location : http://localhost/ecommerce/products.php');
    }
    if(count($_GET)>0){
        $sql = "select * from products where id = {$_GET['id']};";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        // print_r($row);
                        ?>
                    

    <section class="product_details">
        <div class="container">
            <h1>Product Details</h1>
            <div class="row">
                <div class="col-lg-2">
                    <div class="productImg subImg">
                    <img src="http://localhost/ecommerce/<?=$row["image_path"].$row["image"];?>" alt="">
                    </div>
                    <div class="productImg subImg">
                    <img src="http://localhost/ecommerce/<?=$row["image_path"].$row["image"];?>" alt="">
                    </div>
                    <div class="productImg subImg">
                    <img src="http://localhost/ecommerce/<?=$row["image_path"].$row["image"];?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="productImg mainImg">
                    <img src="http://localhost/ecommerce/<?=$row["image_path"].$row["image"];?>" alt="">
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="details">
                    
                        <h2><?php echo $row['name']?></h2>
                        <h3><?php echo "$".$row['price']?></h3>
                                <form action="./productDetails.php" method="POST">
                                <!-- <span>-</span>
                                <span>2</span>
                                <span>+</span> -->

                                    <input type="number" name="quantity" value="" class="form-control sm" placeholder="Quantity">
                                    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
                                    <input type="text" name="name" value="<?php echo $row['name']?>" hidden>
                                    <input type="text" name="price" value="<?php echo $row['price']?>" hidden>
                                    <input type="file" name="image" value="<?php echo $row['image']?>" hidden>
                                    <input type="text" name="image_path" value="<?php echo $row['image_path']?>" hidden>
                                    <button class="w-100" type="submit">ADD TO CART</button>
                                </form>
                                <!-- <form action="./productDetails.php" method="POST">
                                <input type="submit" name="add" class="button" value="add to cart" /> 
                                </form> -->
                        
                        
                        <p><?php echo $row['description']?></p>
                        <div>
                            <h4>Color Shown</h4><h5>Black/White/Gray</h5>
                        </div>
                        <div>
                            <h4>Style</h4><h5>CT1000-100</h5>
                        </div>
                        <div>
                            <h4>Availability <?php echo $row['quantity']?> pices</h4><h5>In Stock</h5>
                        </div>
                        <div class="socialIcon">
                            <img src="./images/facebook.png" alt="">
                            <img src="./images/twitter.png" alt="">
                            <img src="./images/googleplus.png" alt="">
                            <img src="./images/linkedin.png" alt="">
                        </div>
                    <?php
                    $_SESSION['currentProductId'] = "";
                    // print_r($_SESSION['products']);
                    // if(array_key_exists('add', $_POST)) { 
                    //     array_push($_SESSION['products']);
                    // } 
                    }
                }
                }
    ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="relatedProducts">

                        <h1>Related Products</h1>
                        <hr>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iure, autem quam, modi debitis nostrum magnam soluta maiores repudiandae culpa recusandae.</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="product">
                                    <div class="img">
                                        <img src="./images/p1.png" alt="">
                                    </div>
                                    <h4>Product Name Here</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price">$125</span>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <span class="shopNow">
                                                Shop Now
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product">
                                    <div class="img">
                                        <img src="./images/p2.png" alt="">
                                    </div>
                                    <h4>Product Name Here</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price">$125</span>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <span class="shopNow">
                                                Shop Now
                                            </span>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            <div class="col-lg-4">
                                <div class="product">
                                    <div class="img">
                                        <img src="./images/p3.png" alt="">
                                    </div>
                                    <h4>Product Name Here</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price">$125</span>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <span class="shopNow">
                                                Shop Now
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
                
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footerLogo">

                        <img src="./images/LogoW.png" alt="">
                    </div>
                    <div class="info">
                        <div>
                            <img src="./images/mail.png" alt="">
                            <h6>Lorem ipsum@gmail.com</h6>
                        </div>
                        <div>

                            <img src="./images/call.png" alt="">
                            <h6>(012)2918307</h6>
                        </div>
                        <div>

                            <img src="./images/location.png" alt="">
                            <h6>lorem ipsum ad305 street</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>