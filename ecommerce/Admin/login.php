<?php
session_start();
include("../conn.php");
$msg = "welcome : please logIn to continue!";
if (isset($_POST) && count($_POST) > 0) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $recStatus;
    $sql = "SELECT * FROM users where email = '".$email."' and password = '".$password."'";
    if(assert($email)){
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                header('location: http://localhost/ecommerce/admin/');
                $msg = "login success";
                $recStatus = true;
            }
        }
        else{
            $msg = "invalid email or password";
            $recStatus = false;
        }
    }
    else{
        $msg = "please fill all required feilds";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>LogIn | Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <h3 class="text-center">Admin Login</h3>
                </div>
                <form action="login.php" method="POST" accept="" class="shadow p-4">
                    <div class="mb-3">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="abc@abc.com">
                    </div>
                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                    </div>
                    <label class="mb-3">
                        <input type="checkbox" name="RememberMe"> Remember Me
                    </label>
                    <a href="#" class="float-end text-decoration-none">Reset Password</a>
                    <div class="mb-3">
                        <p class="text-center"><?php echo $msg?></p>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>