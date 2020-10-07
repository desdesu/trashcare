<?php
    include 'database.php';
    include 'session.php';
    $status = $_SESSION['status'];
    $id=$_POST['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Profil</title>
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
                        <?php if(isset($_SESSION['status'])=='mentor'){?>
                            <td class="x"><a href="mentor-home.php">HOME</a></td>
                        <?php }else{?>
                            <td class="x"><a href="index.php">HOME</a></td>
                        <?php }?>
                        <?php if(isset($_SESSION['status'])=='mentor'){?>
                            <td class="x"><a href="list-event.php">EVENT</a></td>
                        <?php }else{?>
                            <td class="x"><a href="event-login.php">EVENT</a></td>
                        <?php }?>
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
            <h1 style="text-align: center;">EDIT PROFIL</h1>
            <form name="uform" action="update_profil.php" enctype="multipart/form-data" method="POST">
            <table class="table table-striped">
                <thead class="thead-green">
                    <tr>
                        <th>IDENTITY</th>
                        <th>VALUE</th>
                        <th class="col">PHOTO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><?=$id?></td>
                        <td rowspan="6" class="col">
                            <!-- <img class="image" style="width: 250px; height: 300px;" src="../" alt=""> -->
                            <br><br><input type="file" name="image" placeholder="Gambar">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="nama" class="form" placeholder="enter name" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" class="form" placeholder="enter email" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="nohp" class="form" placeholder="enter phone number" required></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="alamat" class="form" placeholder="enter address" required></td>
                    </tr>
                </tbody>
            </table>
            
        </section>
        <input type="text" name="id" hidden="true" value="<?=$id?>">
            <input type="submit" name="tambah" class="button join" value="Edit Profil">
        </form>
        
    <?php echo $status; ?>
        <footer style="margin-top: 120px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>