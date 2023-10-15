<?php
system("clear");

$hostname = "localhost";
$username = "kzt";
$password = "kzt12345";
$database = "san_kyi_tar";

// sa sa chin join yin database ma htae nat
// $con = mysqli_connect($hostname,$username,$password);

// database soute pee hma htae
$con = mysqli_connect($hostname,$username,$password,$database);

if($con){
    print_r($con);
}