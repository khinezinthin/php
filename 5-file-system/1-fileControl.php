<?php
// aa.txt 
// $fileName = "aa";
// $fileExt = ".txt";
// touch($fileName.$fileExt);

// CREATE FILE 
// print_r($_POST);
// $fileName = $_POST["fileName"];
// // $fileExt = ".txt";
// $fileExt = $_POST["ext"];
// touch($fileName. ".".$fileExt);

// CREATE FOLDER 
$folderName = "test";
$fileName = "aa";
$fileExt = ".txt";

// CREATE FOLDER AND FOLDER HTL FILE CREATE 
// mkdir($folderName);
// touch($folderName."/".$fileName.$fileExt);

// FOLDER NAME HTET YIN MA CREATE
// if(!is_dir($folderName)){
//     mkdir($folderName);
// }
// touch($folderName."/".$fileName.$fileExt);

// FILE AND FOLDER DELETE 
// unlink($folderName."/".$fileName.$fileExt);
// rmdir($folderName);

// mkdir($folderName);
// touch($folderName."/"."aa".$fileExt);
// touch($folderName."/"."bb".$fileExt);
// touch($folderName."/"."cc".$fileExt);
// touch($folderName."/"."dd".$fileExt);

if(is_dir($folderName)){
    // print_r(scandir($folderName));
    foreach(scandir($folderName) as $file){
        //     echo $file;

        // if($file != "." && $file != ".."){
        //     echo $file;
        // }

        // INDEX HTL KA PHAT TR MHO FOLDER HTAL WIN PAY YA ML
        $currentFileName = $folderName ."/". $file;
        if(is_file($currentFileName)){
            // echo $file;
            unlink($currentFileName);
        }
    }
}
rmdir($folderName);