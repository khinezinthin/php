<?php

// system("cd public;php -S localhost:8080;"); linux and mac hmr pl a lote phit

// echo strtoupper(substr(PHP_OS,0,3));

$port = rand(9000,9999);

if(strtoupper(substr(PHP_OS,0,3)) === "WIN"){
    system("cd public && php -S localhost:$port");
}else{
    system("cd public; php -S localhost:$port");
}