<?php

// url 
function url(string $path = null) : string 
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }return $url;

}

// die and dump 
function dd($data, $showType = false):void
{
    echo "<pre style= 'background-color: #1d1d1d; color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px'>";
    if($showType){
        var_dump($data);
    }else{
        print_r($data);
    }
    echo "</pre>";
    die();
}

function logger(string $message, int $colorCode = 32):void{
    echo " \e[39m[LOG] " . " \e[{$colorCode}m". $message . "\n";
}


// alert 
function alert(string $message, string $color = "success"):string
{
    return "<div class='alert alert-$color'>$message</div>" ;
}

// paginator 
function paginator($lists)
{

    $links = "";

    foreach ($lists['links'] as $link) {
        $links .= "<li class='page-item'><a class='page-link " . $link['is_active'] . "' href='" . $link['url'] . "'>" . $link['page_number'] . "</a></li>";
    }

    return "<div class=' d-flex justify-content-between'>
            <p class=' mb-0'>Total : " . $lists['total'] . "</p>
            <nav aria-label='Page navigation example'>
                <ul class='pagination'>
                
                    " . $links . "
                </ul>
            </nav>
        </div>";
}

// session 
function setSession(string $message ,string $key = "message"):void
{
    $_SESSION[$key] = $message;
}

function hasSession(string $key = "message"):bool
{
    if(!empty($_SESSION[$key])){
        return true;
    }return false;
}

function showSession(string $key = "message"):string
{
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;;
} 

// session end

// view 
function view(string $viewName, array $data = null):void
{
    // $shareData = $data ;
    // htote kyi yin $shareData["$myName"]
    // ae lo array lo ma call pl variable sout call chin yin 
    if(!is_null($data)){
        foreach($data as $key => $value){
            // dynamic variable name 
            ${$key} = $value;
        }
    }
    require_once ViewDir."/$viewName.view.php";
}

function controller(string $controllerName):void
{
    // string to array pyg explode nat 
    // list@index => ["list","index"]
    $controllerNameArray = explode("@",$controllerName);
    require_once ControllerDir."/$controllerNameArray[0].controller.php";
    // dynamic function 
    call_user_func($controllerNameArray[1]);
}

function route(string $path, array $queries = null):string
{
    $url = url($path);
    if(!is_null($queries)){
        $url .= "?".http_build_query($queries);
    }
    return $url;
}

function redirect(string $url, string $message = null):void
{
    if(!is_null($message)) setSession($message);   
    header("LOCATION:".$url);
}

// ho bat ka poh tae value yal $_SERVER req method === POST phit ya ml html ka poh tae _method ka ll nyi ya ml 
function checkRequestMethod(string $methodName)
{
    $result = false;
    $methodName = strtoupper($methodName);
    $serverReq = $_SERVER["REQUEST_METHOD"];
    if($methodName === "POST" && $serverReq === "POST"){
        $result = true;
    }
    elseif($methodName === "PUT" && $serverReq === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT"){
        $result = true;
    }
    elseif($methodName === "DELETE" && $serverReq === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "DELETE"){
        $result = true;
    }

    return $result;
}

function run(string $sql, $closeConnection = false): object|bool
{
    $query = mysqli_query($GLOBALS["conn"],$sql);
    $closeConnection && mysqli_close($GLOBALS["conn"]);
    return $query;
}

function all(string $sql): array
{
    $query = run($sql);
    $lists = [];
    while($row = mysqli_fetch_assoc($query)){
        $lists[] = $row;
    }
    return $lists;
}

function first(string $sql): array
{
    $query = run($sql);
    $list = mysqli_fetch_assoc($query);
    return $list;
}


// pagination 
function pagination($sql,$limit = 10){
    // pagination 0-10 10-20 -20-30 / limit-10 offset ka bal ka nay sa ma ll thi poh lo
    // total = 100 
    // limit = 10 
    // currentPage = 1;
    // offest = (currentPage - 1) * limit

    $total = first(str_replace("*","COUNT(id) AS total",$sql))["total"];
    // $limit = 10;
    $totalPages = ceil($total / $limit);
    $currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
    $offest = ($currentPage - 1) * $limit;
    $sql .= " LIMIT $offest,$limit";

    $links = [];
    for ($i=1; $i <= $totalPages ; $i++) { 
        $queries = $_GET;
        $queries["page"] = $i;
        $url = url().$GLOBALS["path"]."?".http_build_query($queries);
        // dd(http_build_query($queries));
        $links[] = [
            "url" => $url,
            "is_active" => $i == $currentPage ? "active" : "",
            "page_number" => $i
        ];
    }

    $lists = [
        "total" => $total,
        "limit" => $limit,
        "total_page" => $totalPages,
        "current_page" => $currentPage,
        "data" => all($sql),
        "links" => $links,
    ];
    return $lists;
}


// table create 
function createTable(string $tableName,...$columns):void{
    $sql =" DROP TABLE IF EXISTS $tableName;";
    run($sql);
    logger("$tableName table droped");

    $sql = "CREATE TABLE $tableName (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        ".join(",",$columns).",
        `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    run($sql);
    logger("$tableName table created");
}