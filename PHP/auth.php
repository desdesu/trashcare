<?php
    include 'database.php';
    function auth($email,$password,$status){
        $query="SELECT * FROM $status WHERE email_$status='$email' AND pass_$status='$password'";
        $result= getData($query);
        if(mysqli_num_rows($result)){
            session_start();
            $_SESSION['login']= True; //menyimpan username pada session login
            $_SESSION['email']= $email;
            $_SESSION['status']= $status;
            if($status=='admin'){
                header('location:admin.php'); //direct ke halaman  
            }
            else if($status=='anggota'){
                header('location:index.php'); //direct ke halaman
            }
            else if($status=='mentor'){
                header('location:mentor-home.php'); //direct ke halaman
            }
            else if($status=='banksampah'){
                header('location:cek_dump.php'); //direct ke halaman
            }
        }
        else{
           header('location:../view/masuk.html');
            //echo $result;
        }
    }
?>