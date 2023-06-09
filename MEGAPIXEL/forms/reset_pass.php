<?php
include_once '../forms/config.php';
// Check if the form has been submitted
if (isset($_POST['email']) && isset($_POST['new-password']) && isset($_POST['confirm-password'])) {

    // Validate the email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Validate the passwords
    if ($_POST['new-password'] != $_POST['confirm-password']) {
        echo "The passwords do not match.";
        exit;
    }

    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');

    // Get the user by email address
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($_POST['email']));
    $user = $stmt->fetch();

    // Check if the user exists
    if ($user === false) {
        echo "The user does not exist.";
        exit;
    }

    // Hash the new password
    $new_password = password_hash($_POST['new-password'], PASSWORD_DEFAULT);

    // Update the user's password in the database
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($new_password, $user['id']));

    // Redirect the user to the login page
    header('Location: ../index.php');
    exit;
}

?>
