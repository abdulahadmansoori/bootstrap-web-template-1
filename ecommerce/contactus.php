<?php
include("./conn.php");
$msg ="";
if(count($_POST) > 0){
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $recStatus;
    
    $sql = "INSERT INTO inquery (name, email, phone, subject, message) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', '" . $subject . "', '" . $message . "');";
    if (assert($name)) {
        if (mysqli_query($conn, $sql)) {
            $msg ="Message is Sended, We will reply you soon! <br>";
            // printRecord($conn,"users");
            $recStatus = true;
        } else {
            $msg = "error : " . mysqli_error($conn);
            $recStatus = false;
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
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
    <section class="Contact">
        <div class="container">
            <div class="row">
                <h1 class="heading">Contact Now</h1>
                <div class="col-md-6">
                    <div class="Section sectionNoBorder">
                        <h3>Contact Details</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contactCard">
                                    <div class="img">
                                        <img src="./images/address.png" alt="">
                                    </div>
                                    <h5>Our Address</h5>
                                    <p>1628 union lane tracy, ca 95377</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contactCard">
                                    <div class="img">
                                        <img src="./images/num.png" alt="">
                                    </div>
                                    <h5>Phone Number</h5>
                                    <p>9254-213-675</p>
                                    <p>9254-213-675</p>
                                </div>
                            </div>
                        </div>
                        <div class="row nextRaw">
                            <div class="col-md-6">
                                <div class="contactCard">
                                    <div class="img">
                                        <img src="./images/email.png" alt="">
                                    </div>
                                    <h5>Email Address</h5>
                                    <p>Ochoac@8afabco.com</p>
                                    <p>info@8afabco.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contactCard">
                                    <div class="img">
                                        <img src="./images/clock.png" alt="">
                                    </div>
                                    <h5>Opening Hours</h5>
                                    <p>MON-FRI 09:00-20:00</p>
                                    <p>SAT 10:00-22:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Section sectionNoBorder">
                        <h3>Send a Message</h3>
                        <form class="register" action="contactus.php" method="POST">
                            <input class="W100" type="text" name="name" placeholder="name" required/>
                            <input class="W50" type="email" name="email" placeholder="email" required/>
                            <input class="W50" type="number" name="phone" placeholder="phone" required/>
                            <input class="W100" type="text" name="subject" placeholder="subject" required/>
                            <input class="W100" type="text" name="message" placeholder="message" required/>
                            <button type="submit">SEND MESSAGE</button>
                            <span class="agree"><?php echo $msg ?></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <img src="./images/map.png" alt="">
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