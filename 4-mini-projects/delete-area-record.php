<?php
// echo "hello";

// print_r($_GET);
$filePath = "area-records/".$_GET["name"];
unlink($filePath);
header("location:area.php");