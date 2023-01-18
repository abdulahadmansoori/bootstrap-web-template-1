<?php
include("./_session.php");
include("./conn.php");
// $_SESSION['products']=array();
if (count($_POST) > 0) {
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">

</head>

<body>
    <?php
    include("./_header.php");
    include("./_main_banner.php");
    include("./Admin/function.php");
    // $_SESSION['products'] = array();
    ?>
    <section class="products">
        <div class="container">
            <h1 class="heading">Products</h1>
            <div class="row">
                <?php

                $sql = "select * from products;";
                $result = mysqli_query($conn, $sql);
                $count = 0;
                if (mysqli_num_rows($result) > 0) {

                ?>
                    <!-- <div class="col-lg-4"> -->
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            // print_r($row);

                        ?>
                            <!-- <div class="product" onclick="location.replace('./productDetails.php')"> -->
                            <div class="col-lg-4">
                                <div class="product">
                                    <div class="img">
                                        <img src="http://localhost/ecommerce/<?=$row["image_path"].$row["image"];?>" alt="">
                                    </div>
                                    <h4 id="<?php echo $row["id"] ?>"><?php echo $row["name"] ?><span><?php echo  " (" . $row["quantity"] . ")" ?></span></h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="price"><?php echo "$" . $row["price"] ?></span>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <a href="./productDetails.php?id=<?php echo $row['id'] ?>"><span class="shopNow" id="" onclick="">
                                                    Shop Now
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            // $count++;

                        }
                    }
                    ?>
                    <!-- <div class="product" onclick="location.replace('./productDetails.html')">
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
                    </div> -->
                    </div>
                    <!-- <div class="col-lg-4">
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

                    </div> -->
                    <!-- <div class="col-lg-4">
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
                    </div> -->
            </div>
            <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="product">
                        <div class="img">
                            <img src="./images/p4.png" alt="">
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
                            <img src="./images/p5.png" alt="">
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
                            <img src="./images/p6.png" alt="">
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="product">
                        <div class="img">
                            <img src="./images/p7.png" alt="">
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
                            <img src="./images/p8.png" alt="">
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
                            <img src="./images/p9.png" alt="">
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
            </div> -->
        </div>
    </section>
    <section class="navigator">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <nav class="nav" aria-label="...">
                        <ul class="pagination">
                            <li class="page-item">
                                <span class="page-link Previous">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link next" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>