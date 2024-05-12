<?php
include('connect.php');

$name = mysqli_escape_string($conn, $_POST['fullname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$pwd = mysqli_escape_string($conn, $_POST['password']);


$query = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$pwd')";
$insert = mysqli_query($conn, $query);

if($insert){
    header('Location: ../account');
}
