<?php
$friends = [];
$fileName = "friend-data.json";
// FILE LL SHI TL FILE HTL DATA LL SHI TL SO FRIENDS ARR HTL POH LITE TAE ENCODE KO DECODE LOTE PEE ARR PYG
if(file_exists($fileName) && filesize($fileName)){
    // echo "file shi tal";
    $friends = json_decode(file_get_contents($fileName),true);
}
print_r($friends[$_GET["index"]]);
$arr = $friends[$_GET["index"]];

?>
<div>
    <h4><?= $arr["fri_name"] ?></h4>
</div>
