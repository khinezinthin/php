<?php
$fruits = ["mango","lemon","banana","apple","orange","grape"];
$nums = [1,2,3,4];

// array_push($fruits,"aa");
// array_push($fruits,"bb");
// array_unshift($fruits,"11");
// array_unshift($fruits,"22");
// print_r($fruits);

// array_pop($fruits);
// array_pop($fruits);
// print_r($fruits);

// array_shift($fruits);
// array_shift($fruits);
// print_r($fruits);

// ORIGINAL ARRAY KO MA PYG BUU 
// $arr = array_chunk($fruits,2);
// print_r($arr);

// print_r(array_merge($fruits,$nums));

// print_r(array_sum($nums));
// print_r(array_product($nums));

// print_r(array_rand($fruits));
// print_r($fruits[array_rand($fruits)]);
// print_r(array_rand($fruits,3));

// ORIGINAL ARRAY KO MA PYG BUU 
// print_r(array_slice($fruits,0,2));
// print_r($fruits);

// ORIGINAL ARRAY PYG TL HTET HTAE LOX LL YA
// print_r(array_splice($fruits,0,2));
// print_r(array_splice($fruits,3,2,["aa","bb"]));
// print_r($fruits);

// print_r(current($fruits));
// print_r(end($fruits));

// print_r(in_array("apple",$fruits)); //index array twat pl
// print_r(in_array("kzt",$fruits));

// $arr = ["a","b","c"];
// [$one,$two,$three] = $arr;
// echo $two;

// $nums2 = range(1,10);
// $nums2 = range(1,10,2);
// print_r($nums2);

// ORIGINAL ARRAY KO MA PYG BUU 
// shuffle($fruits);
// print_r($fruits);

// $arr = array_reverse($fruits);
// print_r($arr);

// $arr = ["a","b","a","b"];
// print_r(array_unique($arr));

// STRING TO ARRAY 
// $str = "min ga lar par";
// print_r(str_split($str));
// print_r(str_split($str,2));
// print_r(str_split(" ",$str));

// ARRAY TO STRING 
// echo implode("---",$fruits);

$info = [
    "name" => "mg mg",
    "age" => 20,
    "major" => "bio",
    "job" => null
];
// print_r(array_keys($info));
// print_r(array_values($info));

// echo array_search("mg mg",$info);
// echo array_key_exists("age",$info);

// $products = [
//     [
//         "id" => 1,
//         "name" => "pork",
//         "price" => 1200,
//         "stock" => 300,
//         "unit" => "kg"
//     ],
//     [
//         "id" => 2,
//         "name" => "chicken",
//         "price" => 1000,
//         "stock" => 0,
//         "unit" => "kg"
//     ],
//     [
//         "id" => 3,
//         "name" => "pen",
//         "price" => 500,
//         "stock" => 30,
//         "unit" => "piece"
//     ],
//     [
//         "id" => 4,
//         "name" => "egg",
//         "price" => 2000,
//         "stock" => 25,
//         "unit" => "box"
//     ],
//     [
//         "id" => 5,
//         "name" => "book",
//         "price" => 300,
//         "stock" => 0,
//         "unit" => "piece"
//     ],
// ];
// print_r(array_map(function($product){
//     // $product["price"] += 100;
//     // $product["status"] = $product["stock"] == 0 ? "out of stock" : "available";
//     // return $product;

//     return [
//         "name" => $product["name"],
//         "price" => $product["price"]
//     ];
// },$products));

// ARROW FUNCTION KO USE 
// $p = array_map(fn($product) => ["name" => $product["name"],"price" => $product["price"]]
// ,$products);
// print_r($p);

// $p = array_filter($products,fn($product) => $product["price"] >= 1000);
// print_r($p);

// $p = array_reduce($products,fn($pv,$cv) => $pv + $cv['price']);
// print_r($p);

// JSON STRING TO PHP ARRAY 
$json = file_get_contents("data.json");
echo $json;
$arr = json_decode($json,true);
print_r($arr);
// echo $arr->name;
// echo $arr->age;

// $arr = json_decode($json,true);
// print_r($arr);
// echo $arr["name"];
// echo $arr["age"];

// $exchange = file_get_contents("http://forex.cbm.gov.mm/api/latest");
// // echo $exchange;
// $exchangeArr = json_decode($exchange,true);
// // print_r($exchangeArr["rates"]["USD"]);
// $rates = $exchangeArr["rates"];
// echo $rates["USD"];

// $productText = file_get_contents("https://fakestoreapi.com/products/");
// // echo $productText;
// $products = json_decode($productText,true);
// print_r($products[1]);

// PHP ARRAY TO JSON STRING 
// $a 


// predefined variable /php hmr thu br tr pr lar tae variable twy / array twy pl
// print_r($_SERVER);

// PREDEFINED VARIABLE 
// CORE CONSTANT / A GYI TWY NAY YAY _
// echo PHP_VERSION;
// MAGIC CONSTANT / __FILE__ UNDERSCOR NAT YAY
// echo __FILE__;
// echo __DIR__;

?>