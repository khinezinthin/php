<?php
// print_r($_POST);
// echo json_encode($_FILES);

header("Content-type:Application/json");
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $result = [ 
        "width" => $_POST["width"]."ft",
        "breadth" => $_POST["breadth"]."ft",
        "area" => ($_POST["width"] * $_POST["breadth"])."sqft"
    ];
    // echo json_encode($result);

    $dir = "records";
    $photoDir = "photos";

    // store photo
    if(!file_exists($photoDir)){
        mkdir($photoDir);
    }

    if(!empty($_FILES) && $_FILES["photo"]["error"] === 0){
        $newPhotoName = $photoDir . '/' .uniqid()."-photo".pathinfo($_FILES["photo"]["name"])["extension"];
        move_uploaded_file($_FILES["photo"]["tmp_name"],$newPhotoName);
        $result["photo"] = $newPhotoName;
    }
    
    // store data 
    if(!file_exists($dir)){
        mkdir($dir);
    }
    $response = json_encode($result);
    $newFileName = "r-".uniqid().time().".json";
    $stream = fopen($dir."/".$newFileName,"w");
    fwrite($stream,$response);
    fclose($stream);

    header("HTTP/1.1 201 File Created");
    echo $response;
}