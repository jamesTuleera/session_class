<?php
session_start();
include('connect.php');

$email = mysqli_escape_string($conn, $_POST['email']);
$pwd = mysqli_escape_string($conn, $_POST['password']);


$query = "SELECT * FROM users WHERE email = '$email' AND password = '$pwd' LIMIT 1";
$get = mysqli_query($conn, $query);

$rows = mysqli_num_rows($get);

if($rows == 1){
    while($row = mysqli_fetch_assoc($get)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

    }
    header('Location: ../account');
}else{
    echo "
    
    
<script>
    alert('Failed, Invalid credentials')
    window.location = '../login.php'
</script>

";
}

// if($get){
//     header('Location: ../account');
// }