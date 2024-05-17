<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/login-reg-styles.css?1">
    <script type="text/javascript" src="../js/validation.js"></script>
</head>
<body>


<span class="error">
    <?php echo isset($_GET['error']) ? $_GET['error']:''?>
</span>
<span class="success">
    <?php echo isset($_GET['success']) ? $_GET['success']:''?>
</span>
<form class="card register-card" action="../backend/register.php" method="post" onsubmit="return validateForm()">
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" required onblur="validateFirstName()">
    <span id="first_name-error" class="error-message"></span>

    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name" required onblur="validateLastName()">
    <span id="last_name-error" class="error-message"></span>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required onblur="validateEmail()">
    <span id="email-error" class="error-message"></span>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required onblur="validatePassword()">
    <span id="password-error" class="error-message"></span>

    <label for="confirm_password">Confirm Password</label>
    <input type="password" id="confirm_password" name="confirm_password" required onblur="validateConfirmPassword()">
    <span id="confirm_password-error" class="error-message"></span>

    <button class="link-button" type="submit">Register</button>
    <span>Already have an account ?</span>
    <a href="login.php">Login</a>
</form>


</body>
</html>