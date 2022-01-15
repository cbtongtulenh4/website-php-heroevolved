<?php

$server="localhost";
$user ="root";
$password ="";
$db ="game";

$conn = new mysqli($server,$user, $password, $db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

?>
