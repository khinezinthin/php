<?php
require_once "./globals.php";

// die and dump 
function dd($data, $showType = false):void
{
    echo "<pre style= 'background-color: #1d1d1d; color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px'>";
    if($showType){
        var_dump($data);
    }else{
        print_r($data);
    }
    echo "</pre>";
    die();
}

//1 response 
function response(mixed $data, int $status = 200):string
{
    header("Content-type:Application/json");
    http_response_code($status);
    if(is_array($data)){
        return  json_encode($data);
    }return json_encode(["message" => $data]);
}

// 2
function area(float $width, float $breadth):float
{
    return $width * $breadth;
}

//3 file or folder create lote pee yin message pyan
function logger(string $message, int $colorCode = 32):void
{
    echo " \e[39m[LOG]". " \e[{$colorCode}m ". $message. "\n";
}

//4 photo file upload fn
function extension(string $fileName):string
{
    return pathinfo($fileName)["extension"];
}

function randomFileName(string $ext):string
{
    return md5(uniqid()). "." .$ext;
}

// key so tae nay yar photo win lr 
function upload(string $key, string $dir):string
{
    $ext = extension($_FILES[$key]['name']);
    $newFileName = $dir. "/". randomFileName($ext);
    move_uploaded_file($_FILES[$key]["tmp_name"],$newFileName);
    return $newFileName;
}

// 5
function url(string $path=null):string
// "http://localhost:6060/hajhfjj/kakfkh.jpg"
{
    // https pr lr sit pr yin on so pee pr tl 
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }
    return $url;
}

//6 json file save 
function saveJsonFile(string $text):void
{
    $newFileName = RECORDS_DIR. "/". randomFileName("json");
    $file = fopen($newFileName,"w");
    fwrite($file,$text);
    fclose($file);
}

// 7
function scanFiles($dir):array
{
    $files = scandir($dir);
    $result = [];
    foreach($files as $file){
        if($file != "." && $file != ".."){
            // array push nat tu tu pl $result[] []arr room htl htae pay
            $result[] = $file;
        }
    }
    return $result;
}

// 8
function responseNoContent():void
{
    http_response_code(204);
}