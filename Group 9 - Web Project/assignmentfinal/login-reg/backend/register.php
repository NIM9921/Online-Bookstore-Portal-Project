<?php
require_once('connect-db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Redirect to the register page with the error message
        header("Location: ../user/register.php?error=Email already exists!");
    }
    // Check if the confirm password matches the password
    else if ($password !== $confirm_password) {
        // Redirect to the register page with the error message
        header("Location: ../user/register.php?error=Passwords did not match!");
    }
    else {
        // save the user to the database
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        mysqli_query($conn, $sql);

        // Redirect to the register page with the success message
        header("Location: ../user/register.php?success=Registration successful!");
    }
}
?>