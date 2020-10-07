<?php 
    include 'database.php';
    session_start();
    $_SESSION['status'];
    $email = $_SESSION['email'];
    $query = "SELECT nama_anggota, id_anggota FROM anggota WHERE email_anggota='$email'";
    $name= mysqli_fetch_assoc(getData($query));
    $id= $name['id_anggota'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
        
    </head>
    <body>
            <!-- header menu-->
            <center>
                <div class="header">
                    <table  class="menu">
                        <tr>
                            <td align="left" style="padding-right:500px;">
                                <font style="font-size: 30px; margin-left: -10px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
                            </td>
                            <td align="right">
                                <td class="x"><a href="index.php">HOME</a></td>
                                <td class="x"><a href="event-login.php">EVENT</a></td>
                                <td class="x"><a href="about.php">ABOUT US</a></td>
                                <?php if($_SESSION['login']==false){?>
                                    <td class="x"><a href="../view/masuk.html">JOIN US</a></td>
                                <?php }else{?>
                                    <td class="x"><a href="view_profil.php">PROFIL</a></td>
                                <?php }?>
                                <?php if($_SESSION['login']==true){?>
                                <td class="x"><a href="donasi.php">DONATION</a></td>
                                <?php }?>
                                <td><a href="logout.php"><img class="logo" src="../logout.png" alt="logout"></a></td>
                            </td>
                        </tr>
                    </table>
                </div>
            </center>

            <!-- Slide show gambar on click -->
            <br>
        <div class="container">

            <!-- list button mentor -->
                <h1 class="event">
                    <b>MyEvent</b>
                </h1>
                <h1 style="font-size: 28px; text-align: center; font-family:fantasy; color:#5c5b5c">( Event yang sudah dan sedang diikuti oleh <?=$name['nama_anggota']?> )</h1>
                <hr style="width: 120px; color: #70db70;">
            <!-- desc list event -->
            <div class="desc">
                <?php
                    $query = "SELECT * FROM event WHERE kode_event IN(
                        SELECT kode_event FROM mengikuti WHERE id_anggota=$id)";
                    $query= getData($query);
                    while($data = mysqli_fetch_assoc($query)):
                ?>
                <form action="event-user.php" method="POST">
                    <div class="content" style="padding:">
                        <img class="image" style="width:400px; text-align:center; margin-left:40px;" src="<?=$data['img_event']?>" alt="sampah"><br>
                            <p class="ins"><b><?=$data['judul']?></b></p><br>
                            <p class="ins">Tanggal : <?=$data['tanggal']?></p><br>
                            <p class="ins">Waktu   : <?=$data['waktu']?></p><br>
                            <p class="ins">Tempat  : <?=$data['lokasi']?></p>
                    </div>
                </form>
                <?php endwhile; ?>
            </div>
        <footer style="margin-top: 20px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>