<?php 
    include 'database.php';
    session_start();
    $_SESSION['login'];
    if($_SESSION['login']==true){
        $_SESSION['status'];
        $_SESSION['email'];
    }
    else{ $_SESSION['login'] = false;
        $_SESSION['status'] = false; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Event User</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
    </head>

    <body>
        <!-- menu header -->
        <center>
            <div class="header">
                <table  class="menu">
                    <tr>
                        <td align="left" style="padding-right:280px;">
                            <font style="font-size: 30px; margin-left: -10px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
                        </td>
                        <td align="right">
                            <?php if($_SESSION['status']=='mentor'){?>
								<td class="x"><a href="mentor-home.php">HOME</a></td>
							<?php }else{?>
								<td class="x"><a href="index.php">HOME</a></td>
							<?php }?>
							<?php if($_SESSION['status']=='mentor'){?>
								<td class="x"><a href="list-event.php">EVENT</a></td>
							<?php }else{?>
								<td class="x"><a href="event-login.php">EVENT</a></td>
							<?php }?>
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
        <?php $kode = $_POST['id'];
            $query="SELECT * FROM event where kode_event='$kode'";
            $result=getData($query);
            $data = mysqli_fetch_assoc($result);
        ?>
        <div class="container container-medium" style="margin-bottom: 45px;">
            <!-- judul h1 -->
            <h1><?=$data['judul']?></h1>

            <!-- section gambar dan desc -->
            <section class="container-medium">
                    <img class="gambar" src="<?=$data['img_event']?>" alt="">
                <div class="artikel">
                    <article>
                        <h2>Description</h2>
                        <hr style="width: 350px; color: #70db70;">

                        <p>
                            <?=$data['deskripsi']?>
                        </p>
                        <hr>
                        <p> Tanggal :
                           <?=$data['tanggal']?>
                        </p>
                        <p> Waktu :
                           <?=$data['waktu']?> WITA
                        </p>
                        <p> Tempat :
                           <?=$data['lokasi']?> 
                        </p>   
                    </article>
                </div>
                <?php if($_SESSION['login']==true){?>
                <button class="button join" onclick="myFunction()">JOIN EVENT</button>
                <?php }else{ ?>
                <button class="button join" onclick="window.location.href='../view/masuk.html'">LOGIN FIRST</button>
                <?php } ?>
            </section>
        </div>
        <div class="container" style="margin-left: 35px;">
            <h2 style="text-align: center;">LATEST EVENT</h2>
            <hr style="width: 350px; color: #70db70; margin-bottom:25px;">

            <!-- List Event -->
            <section>
                <?php 
                    $query = "SELECT kode_event,img_event,judul,LEFT(deskripsi,80) as deskripsi FROM event ORDER BY tanggal ASC LIMIT 4";
                    $result = getData($query);
                    while($data = mysqli_fetch_assoc($result)): 
                ?>
                <form action="event-user.php" method="POST">
                    <article class="tes">
                    <input type="text" name="id" hidden="true" value="<?=$data['kode_event']?>">
                        <img class="image" style="height:150px;" src="<?=$data['img_event']?>" alt="sampah">
                            <p style="text-align: center;"><b><?=$data['judul']?></b></p><br>
                            <p style="text-align: center; margin-top:-50px; margin-bottom:40px;"><?=$data['deskripsi']?></p>
                            <button type="submit" class="button"><span>Attend !</span></button>
                    </article>
                </form>
                <?php endwhile; ?>
            </section>
        </div>
        <script>
        function myFunction() {
        alert("Thanks For Join Us");
        }
        </script>
        <footer style="margin-top: 50px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>