<?php
    session_start();
    $login=$_SESSION['login'];
    if(!$login){
        header('location:../view/masuk.html');
    }
?>