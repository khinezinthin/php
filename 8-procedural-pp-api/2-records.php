<?php
// show records 
require_once "./function.php";

// dd(scanFiles(RECORDS_DIR),true);

$data = array_map(function($file){
    $currentFile = json_decode(file_get_contents(RECORDS_DIR. "/". $file),true);
    $currentFile["file"] = $file;
    $currentFile["location"] = url($file);
    return $currentFile;
},scanFiles(RECORDS_DIR));
echo response($data);