<?php
    include 'database.php';
    $query = "SELECT * FROM event";
    $result = getdata($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EVENT</title>
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
                            <td align="left" style="padding-right:500px;">
                                <font style="font-size: 30px; margin-left: -10px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
                            </td>
                            <td align="right">
                                <td class="x"><a href="mentor-home.php">HOME</a></td>
                                <td class="x"><a href="list-event.php">EVENT</a></td>
                                <td class="x"><a href="about.php">ABOUT US</a></td>
                                <td class="x"><a href="view_profil.php">PROFIL</a></td>
                                <td class="x"><a href="donasi.php">DONATION</a></td>
                                <td><a href="logout.php"><img class="logo" src="../logout.png" alt="logout"></a></td>
                            </td>
                        </tr>
                    </table>
                </div>
            </center>
            <div class="container">
            <br>
                <button class="button" style="padding: 4px;" onclick="window.location.href='komunitas.php'">VIEW COMMUNITY</button>
                <button class="button" style="padding: 4px;" onclick="window.location.href='event-view.php'">EVENT ADDING</button>
            </div>
            <h1>EVENT</h1>
            <table class="tabel1">
                <tr>
                    <th>NO</th>
                    <th>KODE EVENT</th>
                    <th>JUDUL</th>
                    <th>DESKRIPSI</th>
                    <th>GAMBAR</th>
                    <th>TANGGAL</th>
                    <th>WAKTU</th>
                    <th>LOKASI</th>
                    <th>NAMA MENTOR</th>
                    <th>AKSI</th>
                </tr>
                <?php $no = 1;
                while ($data = mysqli_fetch_assoc($result)):
                ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data['kode_event']?></td>
                        <td><?=$data['judul']?></td>
                        <td><?=$data['deskripsi']?></td>
                        <td><img src="<?=$data['img_event']?>" style="width: 30%"></td>
                        <td><?=$data['tanggal']?></td>
                        <td><?=$data['waktu']?></td>
                        <td><?=$data['lokasi']?></td>
                        <td><?=$data['id_mentor']?></td>
                        <td>
                            <form class="form1" method="POST" action="PHP/action_anggota.php">
                            <input type="submit" name="hapus" class="red" value="Hapus">
                            </form>
                        </td>
                    </tr>
                <?php $no++; endwhile; ?>
            </table>
            <form class="kotak" action="event-add.php" method="POST">
                <input type="submit" name="tambah" class="green" value="Tambah Event">
            </form>    
            <br>
    </body>
            <footer style="margin-top: 330px;">
                <center>
                    Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
                </center>
            </footer>
    </html>