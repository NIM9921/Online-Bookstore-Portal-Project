<?php
require_once('connect-db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the login form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user_data = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 0) {
        // Redirect to the register page with the error message
        header("Location: ../user/login.php?error=User with entered email doesn't exists!");
    }
    // Check if the confirm password matches the password
    else if ($password != $user_data['password']) {
        // Redirect to the register page with the error message
        header("Location: ../user/login.php?error=Password invalid!");
    }
    else {
        // login success, Redirect to the home page
        session_start();
        $_SESSION['user_data'] = $user_data;
        header("Location: ../../home/");
    }
}