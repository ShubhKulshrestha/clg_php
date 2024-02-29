<?php
    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($_POST['filetoupload']['name']);
    $uploadsok = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if($isset($_POST['submit'])){
        $check = getimagesize($_POST['filetoupload']['name']);
        if($check != false){
            echo 'file is an image';
            $uploadsok = 1;
        }else{
            echo "file is not an image";
            $uploadsok = 0;
        }
    }
?>