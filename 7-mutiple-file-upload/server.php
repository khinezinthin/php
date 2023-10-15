<?php
// echo "<pre>";

// print_r($_FILES);

$dir = "store";
foreach($_FILES["certificates"]["name"] as $key=>$file){
    // echo $file;
    $newName = $dir. "/". uniqid()."photo." . pathinfo($file)["extension"];
    // echo $newName . "<br>";
    move_uploaded_file($_FILES["certificates"]["tmp_name"][$key],$newName);
}