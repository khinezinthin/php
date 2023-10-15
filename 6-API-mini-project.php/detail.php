<?php 

header("Content-type:Application/json");

$dir = "records";
// Rq hmer file par ya ml
if(!empty($_GET["file"])){
    $fileName = $_GET["file"];
// ae folder htl file shi lr sit ya ml 
    if(   ($dir ."/". $fileName)){
        echo file_get_contents($dir ."/". $fileName);
    }else{
        header("HTTP/1.1 404 File Not Found");
        echo json_encode(["error"=>"file not found"]);
    }
}else{
   echo json_encode(["error"=>"file is required"]);
};