<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reddit</title>
    <link href="css/forms.css" rel="stylesheet">
</head>

<body>
    <div class="signup">
        <form class="signup_content" action="action_signup.php" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <h3>Join us.</h3>
                <hr>

                <div class="input_container">
                    <input type="text" placeholder="Enter email" name="email" required>
                </div>

                <div class="input_container">
                    <input type="text" placeholder="Enter username" name="username" required>
                </div>

                <div class="input_container">
                    <input type="password" placeholder="Enter password" name="password" required>
                </div>

                <div class="input_container">
                    <input type="password" placeholder="Confirm password" name="confirmed_password" required>
                </div>
                
                <button type="submit">Sign Up</button>

                <?php if (isset($_GET['error'])) {
                    echo "<p>" . $error = $_GET['error'] . "</p>";
                } ?>

            </div>
        </form>
    </div>
</body>

</html>