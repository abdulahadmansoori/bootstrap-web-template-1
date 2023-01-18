<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">

</head>

<body>
<?php
    include("./_header.php");
    include("./_main_banner.php");
    $_SESSION['products'] = []
    ?>

    <section class="certItems">
        <div class="container">
            <h1>My Cert</h1>
            <div class="row">
                <div class="col-md-9">
                    <div class="items cert W100">
                        <table class="">
                            <tr>
                                <th>Itme</th>
                                <th>Quality</th>
                                <th>Unit Price</th>
                                <th>Sub Price</th>
                            </tr>
                            <tr>
                                <td class="itme">
                                    <div class="itemImage">
                                        <img class="img" src="./images/gluffs2.png" alt="">
                                    </div>
                                    <div class="itemName">
                                        <h2>Product Name Here</h2>
                                        <p>Product Name Here</p>
                                    </div>
                                </td>
                                <td class="Quality">
                                    <span class="border" >1</span>
                                    <span>Update Cart</span>
                                </td>
                                <td class="UnitPrice">
                                    <span>$123</span>
                                </td>
                                <td class="SubPrice">
                                    <span>$123</span>
                                    <span class="border">X</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="itme">
                                    <div class="itemImage">
                                        <img class="img" src="./images/gluffs2.png" alt="">
                                    </div>
                                    <div class="itemName">
                                        <h2>Product Name Here</h2>
                                        <p>Product Name Here</p>
                                    </div>
                                </td>
                                <td class="Quality">
                                    <span class="border" >1</span>
                                    <span>Update Cart</span>
                                </td>
                                <td class="UnitPrice">
                                    <span>$123</span>
                                </td>
                                <td class="SubPrice">
                                    <span>$123</span>
                                    <span class="border">X</span>
                                </td>
                            </tr>
                                
                        </table>
                    </div>
                    <div class="exploreMore">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h5> << Continue Shopping</h5>
                            </div>
                            <div class="col-md-5">
                                <a href="./checkout.html"><h4>Proceed To Checkout</h4></a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sum">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="billAttributes">
                                    <h5>Discount</h5>
                                    <h5>Sub Total</h5>
                                    <h5>Shipping</h5>
                                    <h3>TOTAL</h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="billValue">
                                    <h5>$246.00</h5>
                                    <h5>$10</h5>
                                    <h5>#15</h5>
                                    <h3>$246.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courier">
                        <div class="billValue">
                            <h5>Shopping</h5>
                            <h6>Corier</h6>
                            <h5>Estimate For</h5>
                            <h6>Lorem, ipsum.</h6>
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