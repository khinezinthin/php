<?php 

header("Content-type:Application/json");

$dir = "records";
// echo json_encode($_SERVER);

if($_SERVER["REQUEST_METHOD"] === "DELETE"){
    // Rq hmer file par ya ml
    if(!empty($_GET["file"])){
        $fileName = $_GET["file"];
    // ae folder htl file shi ll sit ya ml 
        if(file_exists($dir ."/". $fileName)){
            unlink($dir ."/". $fileName);
            echo json_encode(["message"=>"file deleted"]);
            // header("HTTP/1.1 204 No Content");
        }else{
            header("HTTP/1.1 404 File Not Found");
            echo json_encode(["error"=>"file not found"]);
        }
    }else{
       echo json_encode(["error"=>"file is required"]);
    };

}