<!DOCTYPE html>
<html>   
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MEGAPIXEL - Registration Page</title>
        <!-- Page title here -->
        <link rel="icon" href="../assets/logos/logo_with_bg.png" type="image/png" />
        <!-- Page background css -->
        <link rel="stylesheet" type="text/css" href="../css/background.css" />
        <!-- Page responsive css -->
        <link rel="stylesheet" type="text/css" href="../css/media.css" />
        <!-- Page main css -->
        <link rel="stylesheet" type="text/css" href="../css/signup.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    <body>
        <h1 class="title"><span class="titlelogo"></span>EGA PIXELS</h1>
        <div class="signup-page">
            <div class="form">
                <form id="signup-form" method="POST" action="../forms/register.php">
                    <br>
                    <!-- Input fields for user registration information -->
                    <input type="text" placeholder="First Name" name="firstname" required />
                    <input type="text" placeholder="Last Name" name="lastname" required />
                    <input type="text" placeholder="Username" name="username" required />
                    <input type="text" placeholder="Email" name="email" required />
                    <div class="password-field">
                        <input type="password" id="password-input" class="input-field" placeholder="Password" name="password" required />
                        <i id="toggle-password" class="fa fa-eye" aria-hidden="true"></i>
                        <input type="password" id="password-input" class="input-field" placeholder="Confirm password" name="confirmpassword" required />
                    </div>
                    <br>
                    <!-- Terms and Conditions checkbox -->
                    <div class="terms-and-conditions">
                        <div class="checkbox-container">
                            <input type="checkbox" id="terms-checkbox" required />
                        </div>
                        <div class="label-container">
                            <label for="terms-checkbox">I agree to the <a href="https://github.com/ArjaeCaparida/Web-Apps---Social-Media-Clone--MegaPixel/blob/main/terms.md">Terms and Conditions of Megapixel</a></label>
                        </div>
                    </div>
                    <button type="submit">Sign Up</button>
                    <p class="message">Already registered? <a href="../index.php">Sign in</a></p>
                </form>
            </div>
        </div>
        <footer>
            <script>
                // Get the current year and display it in the footer
                var currentYear = new Date().getFullYear();
                document.write("&copy; Megapixel - " + currentYear);
            </script>
            <a href="https://github.com/ArjaeCaparida/Web-Apps---Social-Media-Clone--MegaPixel.git"> - Arjae Kristian </a>
        </footer>
        <script>
            const togglePassword = document.querySelector("#toggle-password");
            const passwordInputs = document.querySelectorAll(".password-field input[type='password']");
        
            togglePassword.addEventListener("click", function (e) {
                // Toggle the visibility of password input fields
                passwordInputs.forEach(input => {
                    const type = input.getAttribute("type") === "password" ? "text" : "password";
                    input.setAttribute("type", type);
                });
                this.classList.toggle("fa-eye-slash");
            });
        </script>
        <br>
    </body>
</html>
