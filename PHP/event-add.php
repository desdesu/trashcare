<?php 
    include 'database.php';
    include 'session.php';
    $email=$_SESSION['email'];
    $query = "SELECT nama_mentor FROM mentor WHERE email_mentor='$email'";
    $data = mysqli_fetch_assoc(getData($query));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Event</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
    </head>

    <body>
        <!-- Header Menu -->
        <center>
            <div class="header">
                <table  class="menu">
                    <tr>
                        <td align="left" style="padding-right:285px;">
                            <font style="font-size: 30px; margin-left: -15px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
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

        <!-- Table Profil -->
        <section class="container container-medium" style="margin-top: 50px;">
            <h1 style="text-align: center;">ADD EVENT</h1>
            <form name="uform" action="../PHP/add_event.php" enctype="multipart/form-data" method="POST">
            <table class="table">
                <thead class="thead-green">
                    <tr>
                        <th>IDENTITY</th>
                        <th>VALUE</th>
                        <th class="col">PHOTO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kode Event</td>
                        <td><input type="text" name="kode" class="form" placeholder="enter Code Event"></td>
                        <td rowspan="7" class="col">
                            <!-- <img class="image" style="width: 300px; height: 400px;" src="a.png" alt=""> -->
                            <br><br><input type="file" name="image" placeholder="Gambar">
                        </td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><input type="text" name="nama" class="form" placeholder="enter title"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><input type="text" name="desc" class="form" placeholder="enter desc"></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="date" class="form"></td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td><input type="text" name="time" class="form" placeholder="enter time"></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td><input type="text" name="alamat" class="form" placeholder="enter address"></td>
                    </tr>
                    <tr>
                        <td>Mentor</td>
                        <td><?=$data['nama_mentor']?></td>
                    </tr>
                </tbody>
            </table>
            <!-- button edit -->
            <input  type="submit" class="button join" value="SAVE">

            </form>
        </section>
        

        <footer style="margin-top: 120px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>