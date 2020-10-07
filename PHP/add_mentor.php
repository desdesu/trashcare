<?php
    include 'database.php';
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $query="INSERT INTO mentor VALUES ('','$nama','$email','$password','$nohp','$alamat','')";
    addData($query);
    header("location:admin.php")
?>