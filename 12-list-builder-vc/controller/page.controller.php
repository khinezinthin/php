<?php

function home(){
    return view("home",["myName" => "kzt", "myAge" => 20]);
}

function about(){
    return view("about");
}