<?php 
    include 'database.php';
    session_start();
    
    if(isset($_SESSION['login'])){
        // echo '<script language="javascript">';
        // echo 'alert("Hello World")';
        // echo '</script>';
    }
    else{ $_SESSION['login'] = false; }
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
                <header style="float : left; width: 100%; margin-bottom: 20px;">
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
        <div class="container">

            <!-- list view agenda -->
            <div class="list-view">
                <div class="agenda">
                    <div class="container container-medium">
                        <h1 class="event">
                            <b>Upcoming Event</b>
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

                <!-- pagination -->

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