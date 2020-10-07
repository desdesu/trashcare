<?php
    include 'database.php';
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    if(isset($_POST['hapus'])){
        $query="DELETE FROM banksampah WHERE id='$id'";
        deleteData($query);
        header("location:admin.php");
    }
?>