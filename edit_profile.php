<?php
    include_once('database/connection.php');
    session_start();

    $query = $db->prepare('SELECT * FROM user');
    $query->execute();
    $user = $query->fetchAll(); 
?>

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

    <div class="title_container">
        <h1><span class="edit-profile-title">Customize profile</span></h1>
    </div>

    <div class="image_container">
        <form class="edit_image" action="action_upload.php" method="post" enctype="multipart/form-data">
        <h3>Profile pic</h3>
        <label>Select image to upload:</label>
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>
    </div>

    <div class="edit_profile">
        <form class="edit_content" action="action_edit.php" method="post">
            <h3>Profile information</h3>

            <div class="input_container">
                <input type="text" placeholder="Change/Add name" name="fullname">
            </div>

            <div class="input_container">
                <input type="text" placeholder="Change email" name="email">
            </div>

            <div class="link_container">
                <a href="change_password.php">Change password</a>
            </div>
           
            <!--delete current user from database -->
            <div class="link_container">
                <a href="delete_user.php">Deactivate account</a>
            </div>

            <div class="button_container">
                <button type="submit">Save changes</button>
            </div>
        </form>
    </div>

    <?php include_once('common/footer.php'); ?>

</body>

</html>