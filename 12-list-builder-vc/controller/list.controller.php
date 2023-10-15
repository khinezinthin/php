<?php

function index(){
    $sql = "SELECT * FROM my";
    // fn htl ka nay global variable call use lox ma ya 
    // $query = run($sql);
    // $lists = [];
    // while($row = mysqli_fetch_assoc($query)){
    //     $lists[] = $row;
    // }
    if(!empty($_GET["q"])){
        $q = $_GET['q'];
        // space lo where shay
        $sql .= " WHERE name LIKE '%$q%'";
    }
    // dd($lists);

    // pagination 0-10 10-20 -20-30 / limit-10 offset ka bal ka nay sa ma ll thi poh lo
    // total = 100 
    // limit = 10 
    // currentPage = 1;
    // offest = (currentPage - 1) * limit

    // return view("list/index",["lists" => $lists]);
    return view("list/index",["lists" => pagination($sql)]);
}

function create(){
    view("list/create");
}

function store(){
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "INSERT INTO my (name ,money) VALUES ('$name',$money)";
    run($sql);
    // data htote kyi tl so $query ka obj pyan tl 
    // kyan tr so query ka 1/ true pyn pay tl 
    // dd($query,true);
    redirect(route("list"),"list create successfully");
    // redirect(route("list"));
}

function delete(){
    // dd($_GET);
    $id = $_POST["id"];
    $sql = "DELETE FROM my WHERE id = $id";
    run($sql);
    // delete pee yin pagination ka route a sa pyn ma yout ag history route ko hte pay 
    redirect($_SERVER["HTTP_REFERER"],"list delete successfully");

    // redirect(route("list"),"list delete successfully");
    // redirect(route("list"));
}

function edit(){
    $id = $_GET['id'];
    $sql = "SELECT * FROM my WHERE id = $id";
    // $query = run($sql);
    // $list = mysqli_fetch_assoc($query);
    return view("list/edit",["list" => first($sql)]);
}

function update(){
    $id = $_POST['id'];
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "UPDATE my SET name='$name',money=$money WHERE id = $id";
    run($sql);
    redirect(route("list"),"list update successfully");

    // redirect(route("list"));
}