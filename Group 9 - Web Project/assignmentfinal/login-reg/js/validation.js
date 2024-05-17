function validateFirstName() {
    var firstName = document.getElementById("first_name").value;
    if (firstName.trim() === "") {
        document.getElementById("first_name-error").innerText = "First name is required";
    } else {
        document.getElementById("first_name-error").innerText = "";
    }
}

function validateLastName() {
    var lastName = document.getElementById("last_name").value;
    if (lastName.trim() === "") {
        document.getElementById("last_name-error").innerText = "Last name is required";
    } else {
        document.getElementById("last_name-error").innerText = "";
    }
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("email-error").innerText = "Invalid email address";
    } else {
        document.getElementById("email-error").innerText = "";
    }
}

function validatePassword() {
    var password = document.getElementById("password").value;
    if (password.length < 8) {
        document.getElementById("password-error").innerText = "Password must be at least 8 characters long";
    } else {
        document.getElementById("password-error").innerText = "";
    }
}

function validateConfirmPassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if (confirmPassword !== password) {
        document.getElementById("confirm_password-error").innerText = "Passwords do not match";
    } else {
        document.getElementById("confirm_password-error").innerText = "";
    }
}

function validateForm() {
    validateFirstName();
    validateLastName();
    validateEmail();
    validatePassword();
    validateConfirmPassword();

    var errorMessages = document.getElementsByClassName("error-message");
    for (var i = 0; i < errorMessages.length; i++) {
        if (errorMessages[i].innerText !== "") {
            return false; // Prevent form submission if any errors are present
        }
    }

    return true; // Allow form submission if all validations pass
}