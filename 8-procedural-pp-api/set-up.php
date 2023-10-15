<?php
require_once "./function.php";

// logger("hello");

// 3

if(!file_exists(PHOTOS_DIR)){
    if(mkdir(PHOTOS_DIR)){
        logger(PHOTOS_DIR ." is created", 35);
    }
}

if(!file_exists(RECORDS_DIR)){
    if(mkdir(RECORDS_DIR)){
        logger(RECORDS_DIR ." is created", 36);
    }
}