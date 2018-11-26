<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reddit</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
</head>

<body>

    <?php include_once('common/header.php'); ?>

    <div class="change_password">
        <form class="edit_content" action='action_change_password.php' method='post'>
            <div class="input_container">
                <h3><span class="change-password-title">Change password</span></h3>
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

            <div class="button_container">
                <button type="submit">Save changes</button>
            </div>

            <?php if (isset($_GET['error'])) {
                echo "<p>" . $error = $_GET['error'] . "</p>";
            } ?>

        </form>
    </div>

    <?php include_once('common/footer.php'); ?>

</body>

</html>