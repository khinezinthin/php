<?Php

require_once "./function.php";

if(!empty($_GET["file"])){
    $fileName = $_GET["file"];
    if(file_exists(RECORDS_DIR ."/". $fileName)){
        unlink(RECORDS_DIR ."/". $fileName);
        responseNoContent();
    }else{
        echo response(["error" => "file not found"],404);
    }
}else{
    echo response(["error" => "file is required"],422);
}