<?php
$target_dir = 'uploads/';
// Use basename() on $_FILES and sanitize the file name
$target_file = $target_dir . basename($_POST['filetoupload']['name']);
$uploadOk = 1;
$imageFileType = strtolower($target_file, PATHINFO_EXTENSION);

// Check if the form was submitted
if(isset($_POST["submit"])) {
    // Check if file is an actual image
    if(isset($_FILES["filetoupload"])) {
        $check = getimagesize($_FILES["filetoupload"]["name"]);
        if($check != false){
            echo 'file is an image';
            $uploadsok = 1;
        }else{
            echo "file is not an image";
            $uploadsok = 0;
        }
    }
}
/*
// You can add more checks here for file size, file type, etc.
// For example, to restrict to certain types of images:
if($uploadOk && !in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
?>
