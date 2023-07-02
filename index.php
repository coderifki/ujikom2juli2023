<html>

<head>
    <title>Login</title>
</head>

<body>
    <!-- <a href="index.php">Go to Home</a> -->
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

        <?php
        // Include database connection file
        include_once("config.php");

        // Check if form submitted
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

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

</body>

</html>