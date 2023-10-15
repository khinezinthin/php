<?php

require_once "./1-connect.php";

$sql = "SELECT * FROM my";

$query = mysqli_query($con,$sql);

// var_dump($query);
// var_dump($query->num_rows);
// var_dump($query->field_count);

// print_r(mysqli_fetch_all($query));

// print_r(mysqli_fetch_assoc($q

while($row = mysqli_fetch_assoc($query)){
    print_r($row);
}