<?php
    include 'database.php';
    session_start();
    if($_SESSION['login']==true){
    }
    else{ $_SESSION['login'] = false; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Event</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
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

        <div class="container">
            <div class="container container-medium">
                <h1 class="event">
                    <b>Upcoming Event</b>
                </h1>
                <hr style="width: 120px; color: #70db70;">
            </div>
            <header>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="../sampahlaut.jpg" style="width: 100%">
                        </div>
                
                        <div class="mySlides fade">
                            <img src="../harisampah.jpg" style="width: 100%">
                        </div>
                
                        <div class="mySlides fade">
                            <img src="../tempatsampah.jpg" style="width: 100%">
                        </div>
                    
                        </div>
                        <br>
                    
                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                        </div>
                        <script src="../js/slide.js" type='text/javascript'></script>
            </header>
                <br>
            <div class="desc">
                <?php
                    $halaman = 4;
                    $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $start = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $result = getData("SELECT * FROM event");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total/$halaman);
                    $query = getData("SELECT * FROM event LIMIT $start, $halaman");

                    while($data = mysqli_fetch_assoc($query)):
                ?>
                <form action="event-user.php" method="POST">
                    <div class="content">
                        <input type="text" name="id" hidden="true" value="<?=$data['kode_event']?>">
                            <img class="image" src="<?=$data['img_event']?>" alt="sampah">
                                <p class="isi"><?=$data['deskripsi']?></p>
                                <p class="judul"><b><?=$data['judul']?></b></p>
                        <button type="submit">submit</button>
                    </div>
                </form>
                <?php endwhile; ?>
            </div>
            <div class="pagination">
                <?php for($i=1; $i<=$pages; $i++):?>
                <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endfor ?>
            </div>
            <button class="button join" onclick="window.location.href='anggota-event.php'">MyEvent</button>
        </div>
        <br>
        <footer>
                <center>
                    Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
                </center>
        </footer>
    </body>
</html>