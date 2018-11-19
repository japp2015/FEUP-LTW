<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="edit_profile">
        <form class="edit_content" action="action_edit.php" method="post">
            <div class="input_container">
                <span class="edit-profile-title">Customize profile</span>
            </div>

            <p>Profile information</p>

            <div class="input_container">
                <label>Display name (optional)</label>
                <input type="text" placeholder="Change/Add name" name="fullname">
            </div>

            <div class="input_container">
                <label>Change email</label>
                <input type="text" placeholder="Change email" name="email">
            </div>

            <div class="input_container">
                <a href="change_password.php">Change password</a>
            </div>

            <!-- Isto vai ser complicado de fazer

            <p>Images</p>
            <p>Images must be .png or .jpg format</p>

            <div class="input_container">
                <form action="action_upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>

            -->

            <!-- delete current user from database -->
            <div class="input_container">
                <a href="delete_user.php">Deactivate account</a>
            </div>

            <div class="input_container">
                <button type="submit">Save changes</button>
            </div>

            <?php if (isset($_GET['error'])) {
                echo "<p>" . $error = $_GET['error'] . "</p>";
            } ?>

        </form>
    </div>

</body>

</html>