<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $password = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT);

    $con = mysqli_connect("localhost", "root", "", "makeup_website");

    if ($con) {
        mysqli_query($con, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        mysqli_close($con);
        echo "<h1 style='color:blue;'>Registration Successful!</h1>";
    } else {
        echo "<h1 style='color:red;'>Registration Failed!</h1>";
    }

