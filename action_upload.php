<?php 
    include_once('database/connection.php');    
    session_start();

    $target_dir = "uploads/"; // não quero guardar num diretório, quero guardar na base de dados
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); // if image is invalid, getimagesize() returns FALSE
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // allow only certain file formats
    if($imageFileType != "png" && $imageFileType != "jpg") {
        echo "Sorry, only JPG or PNG files are allowed.";
        $uploadOk = 0;
    }

?>