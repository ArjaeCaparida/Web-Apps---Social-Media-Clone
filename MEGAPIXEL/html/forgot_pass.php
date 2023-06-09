<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAPIXEL - Forgot Password</title>
    <link rel="icon" href="../assets/logos/logo_with_bg.png" type="image/png">
    <!-- Page background css -->
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <!-- Page responsive css -->
    <link rel="stylesheet" type="text/css" href="../css/media.css">
    <!-- Page main css -->
    <link rel="stylesheet" type="text/css" href="../css/forgot_pass.css">
    <link rel="stylesheet" type="text/css" href="../css/media.css">
</head>
<body>
    <h1 class="title"><span class="titlelogo"></span>EGA PIXELS</h1>
    <div class="forgot-password-page">
        <div class="form">
            <!-- This form is used to reset the user's password -->
            <form method="POST" action="../forms/forgot_pass.php">
                <br>
                <input type="text" placeholder="Email" name="email" required />
                <br>
                <button type="submit"> Reset Password </button>
                <p class="message">Remembered your password? <a href='../index.php'>Log in</a></p>
            </form>
        </div>
    </div>
    <footer>
        <script>
            // This script gets the current year and displays it in the footer
            var currentYear = new Date().getFullYear();
            document.write("&copy; Megapixel - " + currentYear);
        </script>
        <a href="https://github.com/ArjaeCaparida/Web-Apps---Social-Media-Clone--MegaPixel.git"> - Arjae Kristian </a>
    </footer>
    <br>
</body>
</html>
