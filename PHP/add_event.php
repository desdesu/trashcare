<?php
    include 'database.php';

    // variabel img_event
    $lokasi_file = $_FILES['image']['tmp_name'];
    $tipe_file   = $_FILES['image']['type'];
    $nama_file   = $_FILES['image']['name'];
    $direktori   = "../images/$nama_file";
    //end code var_event

    //variabe event
    $kode=$_POST['kode'];
    $judul=$_POST['nama'];
    $desc=$_POST['desc'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $alamat=$_POST['alamat'];
    //end code var_event

    if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file,$direktori); 
       
        // code query
        $query = "INSERT INTO event VALUES ('$kode','$direktori','$judul','$desc','$date','$time','$alamat','1')";
        addData($query);
        // end of code query
        header ("location:event-view.php"); 
        // code Cek
        
         
      }else{
        echo "terjadi kesalahan";  
      }
?>