<?php 
    include 'database.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Check Dump</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css"> 
        <link rel="stylesheet" type="text/css" href="../css/data.css">
    </head>  
    <body>
            <!-- <img class="p" src="profil.png" width="35" height="35"> -->
            <center>
                <div class="header">
                    <table  class="menu">
                        <tr>
                            <td align="left" style="padding-right:900px;">
                                <font style="font-size: 30px; margin-left: -15px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
                            </td>
                            <td align="right">
                                <td class="x"><a href="cek_dump.php">HOME</a></td>
                                <td><a href="logout.php"><img class="logo" src="../logout.png" alt="logout"></a></td>
                            </td>
                        </tr>
                    </table>
                </div>
            </center>
            <h1>CHECK DUMP</h1>
            <table class="tabel1" style="text-transform: uppercase;">
                <tr>
                    <th>NO TRANSAKSI</th>
                    <th>NAMA PENGIRIM</th>
                    <th>JENIS SAMPAH</th>
                    <th>JENIS KIRIM</th>
                    <th>ALAMAT</th>
                </tr>
                <?php
                    $query = "SELECT * FROM sampah INNER JOIN anggota ON sampah.id_anggota=anggota.id_anggota";
                    $result = getData($query); 
                    while ($data=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?=$data['notrans_sampah']?></td>
                    <td><?=$data['nama_anggota']?></td>
                    <td><?=$data['jenis_sampah']?></td>
                    <td><?=$data['jenis_kirim']?></td>
                    <td><?=$data['alamat_anggota']?></td>
                </tr>
                <?php endwhile; ?>
                <!-- untuk nampilin mentor -->
                <?php
                    $queryy = "SELECT * FROM sampah INNER JOIN mentor ON sampah.id_mentor=mentor.id_mentor";
                    $results = getData($queryy); 
                    while ($data=mysqli_fetch_assoc($results)):
                ?>
                <tr>
                    <td><?=$data['notrans_sampah']?></td>
                    <td><?=$data['nama_mentor']?></td>
                    <td><?=$data['jenis_sampah']?></td>
                    <td><?=$data['jenis_kirim']?></td>
                    <td><?=$data['alamat_mentor']?></td>
                </tr>
                <?php endwhile; ?>
                
            </table>    
    </body>
            <footer style="margin-top: 420px;">
                <center>
                    Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
                </center>
            </footer>
    </html>