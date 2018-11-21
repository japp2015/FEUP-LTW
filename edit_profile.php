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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
</head>

<body>

    <?php include_once('header.php'); ?>

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
           
            <!--delete current user from database -->
            <div class="input_container">
                <a href="delete_user.php">Deactivate account</a>
            </div>

            <div class="input_container">
                <button type="submit">Save changes</button>
            </div>
        </form>
    </div>

    <!--<div class="input_container">
        <p>Images</p>
        <p>Images must be .png or .jpg format</p>
        <form action="action_upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
        </form>
        <div>
            <#?php if (isset($image)){
                echo $image;
            }?>
        </div>
    </div> -->

    <?php include_once('footer.php'); ?>

</body>

</html>