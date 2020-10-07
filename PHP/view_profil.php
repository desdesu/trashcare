<?php
    include 'database.php';
    session_start();
    $status =  $_SESSION['status'];
    $email = $_SESSION['email'];
    $query="SELECT * FROM $status WHERE email_$status = '$email'";
    $result=getData($query);
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
                        <td align="left" style="padding-right:500px;">
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
            <h1 style="text-align: center;">PROFIL IDENTITY</h1>
            <table class="table table-striped">
                <thead class="thead-green">
                    <tr>
                        <th>IDENTITY</th>
                        <th>VALUE</th>
                        <th class="col"></th>
                    </tr>
                </thead>
                <?php $data=mysqli_fetch_assoc($result);
                $id = $data['id_'.$status.''];
                //var_dump($id);
                ?>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><?=$data['id_'.$status.'']?></td>
                        <?php if($data['images_'.$status.'']== null) {?>
                            <td rowspan="5" class="col"><img class="image" style="width: 250px; height: 300px;" src="../images/no-image.png" alt=""></td>
                        <?php }else{?>
                        <td rowspan="5" class="col"><img class="image" style="width: 250px; height: 300px;" src="../<?=$data['images_'.$status.'']?>" alt=""></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?=$data['nama_'.$status.''];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$data['email_'.$status.''];?></td>
                    </tr>
                    <!-- <tr>
                        <td>Password</td>
                        <td></td>
                    </tr> -->
                    <tr>
                        <td>Phone Number</td>
                        <td><?=$data['nohp_'.$status.''];?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?=$data['alamat_'.$status.''];?></td>
                    </tr>
                </tbody>
            </table>
        </section>
        
        <form class="kotak" action="profil_edit.php" method="POST">
        <input type="text" name="id" hidden="true" value="<?=$id?>">
            <input type="submit" name="tambah" class="button join" value="Edit Profil">
        </form>
        <footer style="margin-top: 120px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>