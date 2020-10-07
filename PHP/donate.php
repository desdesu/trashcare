<?php
    include 'database.php';
    session_start();
    if($_SESSION['login']==false){
        header('location:../VIEW/masuk.html');
    }
    $email= $_SESSION['email'];
    $cek = $_SESSION['status'];
    
    if($cek=='anggota'){
        $query = "SELECT id_anggota FROM anggota WHERE email_anggota='$email'";
        $data = mysqli_fetch_assoc(getData($query));
    }else if($cek=='mentor'){
        $query = "SELECT id_mentor FROM mentor WHERE email_mentor='$email'";
        $data = mysqli_fetch_assoc(getData($query));
    }
    
        if(isset($_POST['donate'])){
            //variabel POST
            // $nama=$_POST['email'];
            // $alamat=$_POST['alamat'];
            $sampah=$_POST['sampah'];
            $pengiriman=$_POST['pengiriman'];
            
            if($cek=='anggota'){
            $query= "INSERT INTO sampah VALUES (NULL,'$sampah','$pengiriman',".$data['id_anggota'].",1,NULL)";
            }
            else{
            $query= "INSERT INTO sampah VALUES (NULL,'$sampah','$pengiriman',NULL,1,".$data['id_mentor'].")";
            }
            addData($query);
            
        }else{
            // $nama= $_POST['email'];
            $pay=$_POST['pay'];
            $status=$_POST['status'];
            if($cek=='anggota'){
            $query= "INSERT INTO dana VALUES (NULL,$pay,'$status',".$data['id_anggota'].",NULL)";
            }   
            else{
            $query= "INSERT INTO dana VALUES (NULL,$pay,'$status',NULL,".$data['id_mentor'].")";
            }
            addData($query);
        }
        // echo $query;
        header('location:donasi.php');
        // var_dump($result);
?>