<?php 
session_start();
require_once "core/function.php";
require_once "core/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<?= url("css/app.css")?>'>
    <link rel="stylesheet" href='<?= url("node_modules/bootstrap-icons/font/bootstrap-icons.css") ?>'>
    <link rel="stylesheet" href='<?= url("node_modules/bootstrap/dist/css/bootstrap.min.css")?>'>
    <title>Document</title>
</head>
<body>

<?php require_once "navbar.php" ?>