<?php

require_once "./globals.php";
require_once "./core/connect.php";
require_once "./core/function.php";

$tables = all("show tables");
// print_r($tables);

foreach($tables as $table){
    run("DROP TABLE IF EXISTS ".$table['Tables_in_san_kyi_tar']);
}

logger("all table dropped");


// die();
createTable("my","name varchar(20) NOT NULL","money int(11) NOT NULL");

// `name` varchar(20) NOT NULL,
//         `money` int(11) NOT NULL,