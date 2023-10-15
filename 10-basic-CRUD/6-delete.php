<?php

require_once "./1-connect.php";

$sql = "DELETE FROM my WHERE id = 2";

if(mysqli_query($con,$sql)){
    echo "deleted";
}else{
    echo "kya tal";
}