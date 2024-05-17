<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/login-reg-styles.css?2">
    <script type="text/javascript" src="../js/validation.js"></script>
</head>
<body>

<span class="error">
    <?php echo isset($_GET['error']) ? $_GET['error']:''?>
</span>
<span class="success">
    <?php echo isset($_GET['success']) ? $_GET['success']:''?>
</span>
<form class="card login-card" action="../backend/user-login.php" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required onblur="validateEmail()">
    <span id="email-error" class="error-message"></span>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required onblur="validatePassword()"> 
    <span id="password-error" class="error-message"></span>

    <button class="link-button" type="submit">Login</button>
    <span>New User ?</span>
    <a href="register.php">Register</a>
</form>

</body>
</html>