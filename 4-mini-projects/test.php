<?php
// echo "<pre>";
// print_r($_SERVER);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    print_r($_FILES);
    $folderName = "filePhotoStore";
    move_uploaded_file($_FILES["photo"]["tmp_name"],$folderName."/".uniqid()."-".$_FILES["photo"]["name"]);
}