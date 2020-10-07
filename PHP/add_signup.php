<?php
    include 'database.php';
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $query="INSERT INTO anggota VALUES ('','$nama','$email','$password','$nohp','$alamat','')";
    addData($query);
    header ("location:../view/masuk.html");
?>