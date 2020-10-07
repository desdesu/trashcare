<?php 
    include 'database.php';
    include 'session.php';
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
        <!-- list button mentor -->
        <div class="container">
            <button class="button" style="padding: 4px;" onclick="window.location.href='komunitas.php'">VIEW COMMUNITY</button>
            <button class="button" style="padding: 4px;" onclick="window.location.href='event-view.php'">EVENT ADDING</button>
        </div>
        
        <div class="container">

            

                <h1 class="event">
                    <b>Welcome Home Captain <?=$name['nama_mentor']?></b>
                </h1>

            <!-- list view agenda -->
            <div class="list-view" style="margin-top: 0; padding-top: 0;">
                <div class="agenda">
                    <div class="container container-medium">
                        <h1 class="event">
                            <b>Event Organizer</b>
                        </h1>
                        <hr style="width: 120px; color: #70db70;">
                    </div>
                <br>

                <!-- section untuk judul -->
                <section id="volunteer">
                    <div class="container-medium" style="height: 200px; width: 100%;">
                        <div class="row vol_area">
                            <div class="volunteer_content">
                                <h3>Become a <span>TrashCare</span></h3>
                                <p>Join Our Team And Help the world
                                    Support our work
                                    Trash Care mobilises thousands of people around the world to take action
                                    on waste in their communities, change their everyday behaviour and reduce 
                                    their dependency on single use plastic. We need your help to do this. 
                                    Make a donation or a monthly gift to Trash Care, because together we 
                                    can make a better world!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- event list -->
                    <section>
                            <h1 class="event">
                                <b>Latest Event</b>
                            </h1>
                            <hr style="width: 120px; margin-bottom: 25px; color: #70db70;">
                            <?php 
                                $queryy = "SELECT kode_event,img_event,judul,LEFT(deskripsi,80) as deskripsi FROM event ORDER BY tanggal ASC LIMIT 4";
                                $hasil = getData($queryy);
                                while($data = mysqli_fetch_assoc($hasil)): 
                            ?>
                        <form action="event-user.php" method="POST">
                            <article class="tes">
                            <input type="text" name="id" hidden="true" value="<?=$data['kode_event']?>">
                                <img class="image" style="height:150px;" src="<?=$data['img_event']?>" alt="alpha">
                                    <p style="text-align: center;"><b><?=$data['judul']?></b></p>
                                    <p style="text-align: center; margin-top:-50px; margin-bottom:40px;"><?=$data['deskripsi']?></p>
                                <button type="submit" class="button"><span>View</span></button>
                            </article>
                        </form>
                        <?php endwhile; ?>    
                    </section>
                </div>

            </div>
        </div>
    </div>
        <footer style="margin-top: 50px;">
            <center>
                Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
            </center>
        </footer>
    </body>
</html>