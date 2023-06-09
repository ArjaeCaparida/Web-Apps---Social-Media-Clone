<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAPIXEL - Reset Password</title>
    <link rel="icon" href="assets/logos/logo_with_bg.png" type="image/png">
    <!-- Page background css-->
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <!-- Page responsive css-->
    <link rel="stylesheet" type="text/css" href="../css/media.css">
    <!-- Page main css-->
    <link rel="stylesheet" type="text/css" href="../css/reset_pass.css">
</head>
<body>
    <h1 class="title"><span class="titlelogo"></span>MEGAPIXEL</h1>
    <div class="reset-password-page">
        <div class="form">
            <form onsubmit="resetPassword(event)" method="POST">
                <br>
                <input type="email" placeholder="Enter Again your old Email" name="email" required />
                <br>
                <input type="password" placeholder="New Password" name="new-password" required />
                <br>
                <input type="password" placeholder="Confirm Password" name="confirm-password" required />
                <br>
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>
   <footer>
        <script>
            var currentYear = new Date().getFullYear();
            document.write("&copy; Megapixel - " + currentYear);
        </script>
        <a href="https://github.com/ArjaeCaparida/Web-Apps---Social-Media-Clone--MegaPixel.git"> - Arjae Kristian </a>
    </footer>
    <br>
</body>
</html>
