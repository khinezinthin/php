<?php

$friends = [];
$fileName = "friend-data.json";
// FILE LL SHI TL FILE HTL DATA LL SHI TL SO FRIENDS ARR HTL POH LITE TAE ENCODE KO DECODE LOTE PEE ARR PYG
if(file_exists($fileName) && filesize($fileName)){
    // echo "file shi tal";
    $friends = json_decode(file_get_contents($fileName),true);
};

// print_r($friends);
array_splice($friends,$_GET["index"],1);
// print_r($friends);
file_put_contents($fileName,json_encode($friends));
header("location:friend-card.php");