<?php
    include 'koneksi.php';
    function addData($query){ //create
        global $conn;
        $result=mysqli_query($conn, $query);
    }
    function updateData($query){ //update
        global $conn;
        $result=mysqli_query($conn, $query);
    }
    function getData($query){ //read
        global $conn;
        $result=mysqli_query($conn, $query);
        return $result;
        //$data=mysqli_fetch_assoc($result);
    }
    function deleteData($query){ //delete
        global $conn;
        $result=mysqli_query($conn, $query);
    }    
    
?>