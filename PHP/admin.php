<?php
	include 'session.php';
    include 'database.php';	
      
    //   if($_SESSION['login']= True) 
    //     echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    //   else
    //     echo "<script type='text/javascript'>alert('failed!')</script>";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DATA</title>
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
                                <td class="x"><a href="admin.php">HOME</a></td>
                                <td><a href="logout.php"><img class="logo" src="../logout.png" alt="logout"></a></td>
                            </td>
                        </tr>
                    </table>
                </div>
            </center>
            <h1>ANGGOTA</h1>
            <table class="tabel1">
                <tr>
                    <th>ID ANGGOTA</th>
                    <th>NAMA ANGGOTA</th>
                    <th>EMAIL ANGGOTA</th>
                    <th>PASSWORD ANGGOTA</th>
                    <th>NO HP ANGGOTA</th>
                    <th>ALAMAT ANGGOTA</th>
                    <th>AKSI</th>
                </tr>
                <?php 
                $query="SELECT * FROM anggota";
                $result=getData($query);
                while ($data=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?=$data['id_anggota']?></td>
                    <td><?=$data['nama_anggota']?></td>
                    <td><?=$data['email_anggota']?></td>
                    <td><?=$data['pass_anggota']?></td>
                    <td><?=$data['nohp_anggota']?></td>
                    <td><?=$data['alamat_anggota']?></td>
                    <td>
                        <form class="form1" method="POST" action="action_anggota.php">
                        <input type="text" name="id" hidden="true" value="<?=$data['id_anggota']?>">
                        <input type="submit" name="hapus" class="red" value="Hapus">

                        </form>
                    </td>
                </tr>
                <?php endwhile ;?>
            </table> 
            <br></br>
            <hr align="center" size=1 widht=100></hr>
            <h1>MENTOR</h1>
            <table class="tabel1">
                <tr>
                    <th>ID MENTOR</th>
                    <th>NAMA MENTOR</th>
                    <th>EMAIL MENTOR</th>
                    <th>PASSWORD MENTOR</th>
                    <th>NO HP MENTOR</th>
                    <th>ALAMAT MENTOR</th>
                    <th>AKSI</th>
                </tr>
                <?php 
                $query="SELECT * FROM mentor";
                $result=getData($query);
                while ($data=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?=$data['id_mentor']?></td>
                    <td><?=$data['nama_mentor']?></td>
                    <td><?=$data['email_mentor']?></td>
                    <td><?=$data['pass_mentor']?></td>
                    <td><?=$data['nohp_mentor']?></td>
                    <td><?=$data['alamat_mentor']?></td>
                    <td>
                        <form class="form1" method="POST" action="action_mentor.php">
                        <input type="text" name="id" hidden="true" value="<?=$data['id_mentor']?>">
                        <input type="submit" name="hapus" class="red" value="Hapus">
                        </form>
                    </td>
                </tr>
                <?php endwhile ;?>
            </table>
            <form class="kotak" action="../view/add_mentor.html">
                <input type="submit" name="tambah" class="green" value="Tambah Data">
            </form>  
            <br><br>
            <hr align="center" size=1 widht=100></hr>
            <h1>BANK SAMPAH</h1>
            <table class="tabel1">
                <tr>
                    <th>ID BS</th>
                    <th>NAMA BS</th>
                    <th>EMAIL BS</th>
                    <th>PASSWORD BS</th>
                    <th>NO TLP BS</th>
                    <th>ALAMAT BS</th>
                    <th>AKSI</th>
                </tr>
                <?php 
                $query="SELECT * FROM banksampah";
                $result=getData($query);
                while ($data=mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?=$data['id_banksampah']?></td>
                    <td><?=$data['nama_banksampah']?></td>
                    <td><?=$data['email_banksampah']?></td>
                    <td><?=$data['pass_banksampah']?></td>
                    <td><?=$data['nohp_banksampah']?></td>
                    <td><?=$data['alamat_banksampah']?></td>
                    <td>
                        <form class="form1" method="POST" action="action_banksampah.php">
                        <input type="text" name="id" hidden="true" value="<?=$data['id_banksampah']?>">
                        <input type="submit" name="hapus" class="red" value="Hapus">
                        </form>
                    </td>
                </tr>
                <?php endwhile ;?>
            </table>
            <br>
    </body>
            <footer style="margin-top: 100px;">
                <center>
                    Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
                </center>
            </footer>
</html>