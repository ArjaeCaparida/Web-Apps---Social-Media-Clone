<?php
include '../database/db_config.php';

// Initialize error and success messages
$error_message = "";
$success_message = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if (isset($_POST["confirmpassword"]) && $_POST["password"] != $_POST["confirmpassword"]) {
        $error_message = "Passwords do not match";
        echo "<script>alert('$error_message');</script>";
    } else {
        // Check if username is taken
        $check_username_query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $check_username_query);
        if (mysqli_num_rows($result) > 0) {
            $error_message = "Username is already taken";
            echo "<script>alert('$error_message');</script>";
        } else {
            // Check if email is taken
            $check_email_query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $check_email_query);
            if (mysqli_num_rows($result) > 0) {
                $error_message = "Email is already taken";
                echo "<script>alert('$error_message');</script>";
            } else {
                // Add user to database
                $add_user_query = "INSERT INTO users (firstname, lastname, username, email, password) 
                                    VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
                if (mysqli_query($conn, $add_user_query)) {
                    $success_message = "User registered successfully";
                    echo "<script>alert('$success_message');</script>";
                    // Redirect to index.html
                    echo "<script>window.location.href = '../index.html';</script>";
                } else {
                    $error_message = "Error adding user: " . mysqli_error($conn);
                    echo "<script>alert('$error_message');</script>";
                }
            }
        }
    }
}
?>
