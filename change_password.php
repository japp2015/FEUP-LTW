<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">


<body>

    <form action='action_change_password.php' method='post'>
        <div class="input_container">
            <span class="change-password-title">Change password</span>
        </div>

        <div class="input_container">
            <input type="password" placeholder="Current password" name="old_password" required>
        </div>

        <div class="input_container">
            <input type="password" placeholder="New password" name="new_password" required>
        </div>

        <div class="input_container">
            <input type="password" placeholder="Confirm password" name="confirmed_password" required>
        </div>

        <div class="input_container">
            <button type="submit">Save changes</button>
        </div>

        <?php if (isset($_GET['error'])) {
            echo "<p>" . $error = $_GET['error'] . "</p>";
        } ?>

    </form>

</body>

</html>