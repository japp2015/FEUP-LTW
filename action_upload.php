<?php 

    /*include_once('database/connection.php');    
    session_start();

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["name"]); // if image is invalid, getimagesize() returns FALSE
        if($check !== false) {
            $imagename=$_FILES["fileToUpload"]["name"]; 
            $imagetmp=addslashes (file_get_contents($_FILES['fileToUpload']['tmp_name']));
            UploadPicture($imagetmp, $_SESSION['username']);
        } else {
            echo "File is not an image.";
        }
    }

    // allow only certain file formats
    if($imageFileType != "png" && $imageFileType != "jpg") {
        echo "Sorry, only JPG or PNG files are allowed.";
        $uploadOk = 0;
    }

    header('Location: main.php');*/
    
?>