<?php
require_once "./function.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $data = [
        "width" => $_POST["width"]. "ft",
        "breadth" => $_POST["breadth"]. "ft",
        "area" => area($_POST["width"],$_POST["breadth"]). "sqft",
    ];

    if(!empty($_FILES) && $_FILES["photo"]["error"] === 0){
        $photoName = upload("photo",PHOTOS_DIR);
        $data["photo"] = url($photoName);
    }

    // data twy ya p so json save ya ml json ka string phit hma so tot encode lote

    saveJsonFile(json_encode($data));
}

echo response($data,201);