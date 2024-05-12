<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'emmaclass';

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    echo ' Not connected';
}