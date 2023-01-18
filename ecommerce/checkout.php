<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Out</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">

</head>

<body>
<?php
    include("./_header.php");
    include("./_main_banner.php");
    ?>

    <section class="checkOut">
        <div class="container">
            <h1>Check Out</h1>
            <div class="row CheckOutItem">
                <div class="col-lg-12">
                    <div class="CheckOutItemHeading">

                        <h2 class="bill_address">Bill Address</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="country">Country</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="country">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="country">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="firstName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="companyName">Company Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="companyName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="townCity">Town/City</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="townCity">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ordered_list">
                        <div class="ordered_items">
                            <h3>Your Order</h3>
                        </div>
                        <div class="ordered_item">
                            <span>Cart Subtotal</span>
                            <span class="alignItemRight">$123.00</span>
                        </div>
                        <div class="ordered_item">
                            <span>Your Order</span>
                            <span class="alignItemRight">Free Shiping</span>
                        </div>
                        <div class="ordered_item">
                            <span>Order Total</span>
                            <span class="alignItemRight">$123.00</span>
                        </div>
                        <div class="ordered_items">
                            <h3>Payment Method</h3>
                            <div class="paymentMethod">
                                <div class="payment">
                                    <input type="checkbox" name="cheque" id="">
                                    <label for="cheque"> Cheque</label>
                                </div>
                                <div class="payment">
                                    <input type="checkbox" name="paypal" id="">
                                    <label for="paypal">Paypal</label>
                                    <img src="./images/paypal.png" alt="" width="30%">
                                </div>
                            </div>
                            <div class="placeOrder">
                                <h5>Place Order</h5>
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