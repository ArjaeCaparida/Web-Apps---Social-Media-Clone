<?php
include_once '../forms/config.php';

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs and sanitize them
    $firstname = htmlspecialchars(trim($_POST["firstname"]));
    $lastname = htmlspecialchars(trim($_POST["lastname"]));
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars($_POST["password"]);
    $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);

    // Regular expression to validate the password format
    $password_regex = '/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/';

    // Validate password format and confirmation
    if (!preg_match($password_regex, $password)) {
        $error_message = "Password must be at least 8 characters long and include at least one number, one special character, one uppercase letter, and one lowercase letter";
    } elseif ($password != $confirmpassword) {
        $error_message = "Passwords do not match";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !strpos($email, '@') || !strpos($email, '.')) {
        $error_message = "Invalid email format";
    } else {
        // Check if the username or email already exists in the database
        $check_user_query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($conn, $check_user_query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['email'] === $email) {
                $error_message = "Email is already taken";
            } elseif ($row['username'] === $username) {
                $error_message = "Username is already taken";
            }
        }

        // If no errors, insert the user into the database
        if (empty($error_message)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $add_user_query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $add_user_query);
            mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $email, $hashed_password);
            if (mysqli_stmt_execute($stmt)) {
                $success_message = "User registered successfully";
                // Redirect to index.php after successful registration
                if (!empty($success_message)) {
                    echo "<script>alert('$success_message');</script>";
                    echo "<script>setTimeout(function(){ window.location.replace('../index.php'); }, 1000);</script>";
                }
                exit();
            } else {
                $error_message = "Error adding user: " . mysqli_error($conn);
            }
        }
    }

    // If there are any errors, display the error message and redirect to signup.html
    if (!empty($error_message)) {
        echo "<script>alert('$error_message');</script>";
        echo "<script>setTimeout(function(){ window.location.replace('../html/signup.php'); }, 1000);</script>";
    }
}

// Exit if there is an error message to prevent further execution of the script
if (!empty($error_message)) {
    exit();
}
?>
