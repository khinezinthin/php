<?php

$uri = $_SERVER["REQUEST_URI"];
// uri hmr 2 pine par path nat query 
// print_r($_SERVER["REQUEST_URI"]);
$uriArr = parse_url($uri);
$path = $uriArr["path"];

const Routes = [
    "/" => "page@home",
    "/about" => "page@about",
    "/list" => "list@index",
    "/list-create" => "list@create",
    "/list-store" => ["post","list@store"],
    "/list-edit" => "list@edit",
    "/list-update" => ["put","list@update"],
    "/list-delete" => ["delete","list@delete"],
  ];
  
//   post method ko get nat req ma htoe ag pyn yay 
//  1 array key par lr 
//  2 array key yae value array phit lr
//  3 fn 2 yae [0] tan phoe poh
  if(array_key_exists($path,Routes) && is_array(Routes[$path]) && checkRequestMethod(Routes[$path][0]) ){
    controller(Routes[$path][1]);
  }elseif(array_key_exists($path,Routes) && !is_array(Routes[$path])){
    controller(Routes[$path]);
  }
  else{
    view("not-found");
  }