<?php
$host = "localhost";
$user = "root";
$password = "";
$name = "cordova";

$conn = new mysqli($host, $user, $password, $name);
if($conn->connect_error){
    die("Connection Failed");
}

?>