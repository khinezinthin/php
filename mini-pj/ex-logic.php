<?php 
$apiData = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$apiData = json_decode($apiData,true);
$rates = $apiData["rates"];

// print_r($_POST);

if(isset($_POST["btn"])):
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $mmk = $amount * str_replace(",","",$rates[$from]);
    $result = $mmk / str_replace(",","",$rates[$to]);
    // echo $result;

?>

<div class=" bg-light p-3">
    <p class=" text-black-50 pb-0">From <?= $amount ?> <?= $from ?> to <?= $to ?></p>
    <h1><?= round($result,2) ?> <?= $to ?></h1>
</div>

<?php endif; ?>