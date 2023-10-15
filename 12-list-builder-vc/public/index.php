<?php 

require_once "../index.php";

// dd($_SERVER);

// if($_SERVER["REQUEST_URI"] === "/"){
//     require_once ViewDir."/home.view.php";
// }elseif($_SERVER["REQUEST_URI"] === "/about-us"){
//     require_once ViewDir."/about.view.php";
// }

$uri = $_SERVER["REQUEST_URI"];
// uri hmr 2 pine par path nat query 
// print_r($_SERVER["REQUEST_URI"]);
$uriArr = parse_url($uri);
$path = $uriArr["path"];

// switch($path){
//     case "/":
//       view("home",["myName" => "kzt", "myAge" => 20]);
//     break;

//     case "/about-us": 
//       view("about");
//     break;

//     case "/list":
//       // view list ka nay tann ma call
//       // view("list/index");
//       controller("list@index");
//     break;

//     case "/list-create":
//       controller("list@create");
//     break;

//     case "/list-store":
//       controller("list@store");
//     break;

//     case "/list-delete":
//       controller("list@delete");
//     break;

//     case "/list-edit":
//       controller("list@edit");
//     break;

//     case "/list-update":
//       controller("list@update");
//     break;

//     default: 
//     view("not-found");
// }
// performance tate ma kg switch state ka 1 sint chin lote ya lox 




// echo "i am index in pubic dir";