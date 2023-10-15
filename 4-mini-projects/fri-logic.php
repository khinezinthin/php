<?php 
echo "<pre>";
// print_r($_POST);

$friends = [];
$fileName = "friend-data.json";
// FILE LL SHI TL FILE HTL DATA LL SHI TL SO FRIENDS ARR HTL POH LITE TAE ENCODE KO DECODE LOTE PEE ARR PYG
if(file_exists($fileName) && filesize($fileName)){
    // echo "file shi tal";
    $friends = json_decode(file_get_contents($fileName),true);
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    // print_r($_FILES);
    // $arr = explode(".",$_FILES["fri_photo"]["name"]);
    // $ext = end($arr);
    // print_r($ext);  
    // $newName = uniqid()."-"."friend".".".$ext;
    // echo $newName;
    // print_r(pathinfo($_FILES["fri_photo"]["name"]));

    if($_FILES["fri_photo"]["error"] === 0){
    // if(UPLOAD_ERR_OK){
        $dir = "friend-zone";
        $newName = $dir."/".uniqid()."-"."friend".".".pathinfo($_FILES["fri_photo"]["name"])["extension"];
        // echo $newName;
        move_uploaded_file($_FILES["fri_photo"]["tmp_name"],$newName);

        // $fdata = fopen("fdata.json","a");
        // $info = $_POST;
        // $info["photo"] = $newName;
        // // print_r($info);

        // $infoText = json_encode($info);
        // fwrite($fdata,$infoText);
        // fclose($fdata);

        $info = $_POST;
        $info["photo"] = $newName;
        array_push($friends,$info);
        print_r($friends); 
        $data = fopen($fileName,"w");
        fwrite($data,json_encode($friends));
        fclose($data);
        header("location: friend-card.php");
    }
    

}