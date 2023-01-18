<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
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
    <section class="account">
        <div class="container">
            <div class="row">
                <h1 class="heading">My Account</h1>
                <div class="col-md-6">
                    <div class="Section">
                        <h3>Log Into Your Account</h3>
                        <form class="LogIn" action="">
                            <input type="text" placeholder="User Name" />
                            <input type="password" placeholder="Password" />
                            <button>LOGIN</button>
                            <span>
                                <input class="rememberMe" type="checkbox" name="rememberMe" id="rememberMe">
                                <label for="rememberMe">Remember Me</label>
                            </span>
                            <span class="ForgetPass">Forget password?</span>
                            <span class="green">Create Account</span>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Section">
                        <h3>Register</h3>
                        <form class="register" action="">
                            <input class="W50" type="text" placeholder="First Name" />
                            <input class="W50"type="text" placeholder="Last Name" />
                            <input class="W100"type="text" placeholder="Email" />
                            <input class="W100"type="password" placeholder="Password" />
                            <input class="W100"type="password" placeholder="Retype Password" />
                            <button>CREATE ACCOUNT</button>
                            <span class="agree">By creating an account, I'am agree to your <span><a href="./terms&policy.html">Terms & Conditions</a></span> </span>
                            <span class="green">Already Registered</span>
                        </form>
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