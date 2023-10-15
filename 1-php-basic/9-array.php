<?php
system("clear");
// INDEX ARRAY 
$fruits = ["mango","lemon","banana","apple","orange"];
// A TO Z 
sort($fruits);
print_r($fruits);
rsort($fruits);
print_r($fruits);

// ASSOCIATIVE ARRAY 
// $info = [
//     "name" => "mgmg",
//     "age" => 20,
//     "major" => "bio",
//     "job" => null
// ];
// // VALUE KO KYI PEE SI A TO Z
// asort($info);
// print_r($info);
// arsort($info);
// print_r($info);

// // KEY KO KYI PEE SI A TO Z
// ksort($info);
// print_r($info);
// krsort($info);
// print_r($info);

// MULTIDIMENTIONAL ARRAY 
$products = [
    [
        "id" => 1,
        "name" => "pork",
        "price" => 1200,
        "stock" => 300,
        "unit" => "kg"
    ],
    [
        "id" => 2,
        "name" => "chicken",
        "price" => 1000,
        "stock" => 0,
        "unit" => "kg"
    ],
    [
        "id" => 3,
        "name" => "pen",
        "price" => 500,
        "stock" => 30,
        "unit" => "piece"
    ],
    [
        "id" => 4,
        "name" => "egg",
        "price" => 2000,
        "stock" => 25,
        "unit" => "box"
    ],
    [
        "id" => 5,
        "name" => "book",
        "price" => 300,
        "stock" => 0,
        "unit" => "piece"
    ],
];




?>