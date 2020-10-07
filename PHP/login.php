<?php
    include 'auth.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['status'];
    if($email!=null&&$password!=null){
        auth($email,$password,$status);
    }
    else{
        header('location:../view/masuk.html');
    }
?>