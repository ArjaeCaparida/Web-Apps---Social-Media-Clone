<?php

// Include the config file
include_once "forms/config.php";

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect the user to the home page
    header("Location: index.php");
    exit;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are valid
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    // If the user exists and the password is correct, log the user in
    if (mysqli_num_rows($result) === 1) {
        // Get the user data from the database
        $row = mysqli_fetch_assoc($result);

        // Create a session for the user
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        // Redirect the user to the home page
        header("Location: ../html/hompage.php");
        exit;
    } else {
        // Display an error message
        echo "Invalid username or password.";
    }
}

?>
