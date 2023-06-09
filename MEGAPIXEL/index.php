<?php
include_once "forms/config.php" ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Page title here -->
        <title>MEGAPIXEL - Login Page</title>
        <!-- Page title icon here -->
        <link rel="icon" src="/assets/logos/favicon.png" type="image/png" />
        <!-- Page background css-->
        <link rel="stylesheet" type="text/css" href="css/background.css" />
        <!-- Page responsive css-->
        <link rel="stylesheet" type="text/css" href="css/media.css" />
        <!-- Page main css-->
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    <body>
        <!-- Page Body-->
        <h1 class="title"><span class="titlelogo"></span>EGA PIXELS</h1>
        <div class="login-page">
            <div class="form">
                <!-- This code creates a form that allows users to login to the Megapixel website. -->
                 <form id="login-form" method="POST" action="forms/login.php">
                    <br />
                    <input type="text" class="input-field" placeholder="Enter your email address" name="email" required />
                    <div class="password-field">
                        <input type="password" id="password-input" class="input-field" placeholder="Enter your password" name="password" required />
                        <i id="toggle-password" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <p class="message1"><a href="html/forgot_pass.php">Forgot password?</a></p>
                    <button type="submit">Login</button>
                    <p class="message">Not registered? <a href="html/signup.php">Create an account</a></p>
                </form>
            </div>
        </div>
        <footer>
            <!-- Page Footer-->
            <script>
                // Get the current year and display it in the footer
                var currentYear = new Date().getFullYear();
                document.write("&copy; Megapixel - " + currentYear);
            </script>
            <a href="https://github.com/ArjaeCaparida/Web-Apps---Social-Media-Clone--MegaPixel.git"> - Arjae Kristian </a>
        </footer>
        <script>
            const togglePassword = document.querySelector("#toggle-password");
            const passwordInput = document.querySelector("#password-input");

            togglePassword.addEventListener("click", function (e) {
                // Toggle the visibility of the password input field
                const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
                passwordInput.setAttribute("type", type);
                // Toggle the eye icon to show or hide the password
                this.classList.toggle("fa-eye-slash");
            });
        </script>
    </body>
</html>
