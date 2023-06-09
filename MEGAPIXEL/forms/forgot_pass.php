<?php

// Require the database connection file
require_once('../forms/config.php');

// Check if the user submitted the form
if (isset($_POST['submit'])) {

    // Get the email address from the form
    $email = $_POST['email'];

    // Check if the email address exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // If the email address does not exist, redirect the user back to the forgot password page
    if (mysqli_num_rows($result) == 0) {
        header('Location: ../html/process_retrieve.php');
        exit;
    }

    // If the email address exists, redirect the user to the index page
    header('Location: ../html/reset_pass.php');
    exit;
}

?>
