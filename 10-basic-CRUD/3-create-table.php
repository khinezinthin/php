<?php

require "./1-connect.php";

$sql = "CREATE TABLE `san_kyi_tar`.`my` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `money` INT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB";

if(mysqli_query($con,$sql)){
    echo "aung tal";
}else{
    echo "kya tal";
}