<?php

require "./1-connect.php";

$sql = "INSERT INTO my (name,money) VALUES ('kk',15000),('aye aye',1000)";

if(mysqli_query($con,$sql)){
    echo "aung tal";
}else{
    echo "kya tal";
}