<?php 
    include 'database.php';
    session_start();
    $_SESSION['status'];
    $email = $_SESSION['email'];
    $query = "SELECT nama_mentor FROM mentor WHERE email_mentor='$email'";
    $name= mysqli_fetch_assoc(getData($query));
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

            <!-- Slide show gambar on click -->
            <br>
        
            <div class="container">
                <button class="button" style="padding: 4px;" onclick="window.location.href='komunitas.php'">VIEW COMMUNITY</button>
                <button class="button" style="padding: 4px;" onclick="window.location.href='event-view.php'">EVENT ADDING</button>
            </div>
        <div class="container">

            <!-- list button mentor -->
            

                <h1 class="event">
                    <b>Welcome Home Captain <?=$name['nama_mentor']?></b>
                </h1>
                <hr style="width: 120px; color: #70db70;">
            <!-- desc list event -->
            <div class="desc">
                <?php
                    $halaman = 6;
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
        <footer style="margin-top: 20px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>