<?php 
    include 'database.php';
    session_start();
    $status = $_SESSION['status'];
    //images
    $lokasi_file = $_FILES['image']['tmp_name'];
    $tipe_file   = $_FILES['image']['type'];
    $nama_file   = $_FILES['image']['name'];
    $direktori   = "images/$nama_file";
    //close var

    if($status=='anggota'){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $query = "UPDATE anggota SET 
            nama_anggota= '$nama',
            email_anggota = '$email',
            nohp_anggota = $nohp,
            alamat_anggota = '$alamat',
            images_anggota = '$direktori'
            WHERE id_anggota = $id;
            "; 
    }else {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $query = "UPDATE mentor SET 
            nama_mentor= '$nama',
            email_mentor = '$email',
            nohp_mentor = $nohp,
            alamat_mentor = '$alamat',
            images_mentor = '$direktori'
            WHERE id_mentor = $id;
            ";

    }
    if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file,$direktori); 
        updateData($query);
    // if($succes){
        header('location:view_profil.php');  
    // }else{
    //     header('location:profil_edit.php');
    }
?>