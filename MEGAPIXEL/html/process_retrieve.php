<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Error Message</title>
        <link rel="stylesheet" type="text/css" href="../css/background.css" />
        <link rel="icon" href="../assets/logos/logo_with_bg.png" type="image/png" />
        <link rel="stylesheet" type="text/css" href="../css/process.css" />

    </head>
    <body>
        <div>
            <img src="../assets/logos/logo_with_bg.png" alt="Logo" />
            <h1>Error</h1>
            <p class="error">We could not find your information in our database. Please try again or contact us for assistance.</p>
            <p class="email">For further assistance, please email us at support-megapixel@gmail.com.</p>
            <div id="timer"></div>
            <script>
                var timer = 10; 
                var interval = setInterval(function() {
                    timer--;
                    document.getElementById("timer").innerHTML = timer;
                    if (timer === 0) {
                        window.location.href = "../index.php";
                        clearInterval(interval);
                    }
                }, 1000);
            </script>
        </div>
    </body>
</html>
