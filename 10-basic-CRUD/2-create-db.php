<?php

require_once "./1-connect.php";

$sql = "CREATE DATABASE san_kyi_tar";

if(mysqli_query($con,$sql)){
    echo "aung tl";
}else{
    echo "kya tl";
}