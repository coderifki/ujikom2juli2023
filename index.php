<?php
// Include database connection file
include_once("config.php");




// Check if form submitted
if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // Perform query to check if the username and password match
    $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        // User login successful
        // Redirect to home page
        header("Location: home.php");
        exit(); // Important: Ensure that code execution stops after the redirect
    } else {
        // User login failed
        echo "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- favicon
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="card-authentication2 mx-auto my-5">
            <div class="card-group">
                <div class="card mb-0">
                    <div class="bg-signin2"></div>
                    <div class="card-img-overlay rounded-left my-5">
                        <h2 class="text-white">Lorem</h2>
                        <h1 class="text-white">Ipsum Dolor</h1>
                        <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>

                <div class="card mb-0 ">
                    <div class="card-body">
                        <div class="card-content p-3">
                            <div class="text-center">
                                <img src="assets/images/logo-login.png" alt="logo icon" style="width: 150px">
                            </div>
                            <div class="card-title text-uppercase text-center py-3">Login</div>
                            <form action="home.php" method="post">
                                <div class="form-group">
                                    <div class="position-relative has-icon-left">
                                        <label name="username" for="Username" class="sr-only">Username</label>
                                        <input type="text" id="username" required class="form-control" placeholder="Username">
                                        <div class="form-control-position">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-left">
                                        <label type="password" for="PASSWORD_BCRYPT" class="sr-only">Password</label>
                                        <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                                        <div class="form-control-position">
                                            <i class="icon-lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <input name="submit" value="login" type="submit" class="btn btn-primary btn-block waves-effect waves-light">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div><!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

</body>

</html>
<!-- <html>

<head>
    <title>Login</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <h2>Login</h2>

    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" name="submit" value="Login">
</body>

</html> -->