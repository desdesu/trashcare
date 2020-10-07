<?php
	include 'database.php';	
    $query = "select * from anggota";
    $Result = getData($query);
?>
<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css"> 
        <link rel="stylesheet" type="text/css" href="../css/data.css">
        <title>Komunitas</title>
    </head>  
    <body>
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
            <br>
            <div class="container">
                <button class="button" style="padding: 4px;" onclick="window.location.href='komunitas.php'">VIEW COMMUNITY</button>
                <button class="button" style="padding: 4px;" onclick="window.location.href='event-view.php'">EVENT ADDING</button>
            </div>

            <h1>KOMUNITAS</h1>
            <table class="tabel1">
                <tr>
                    <th>ID ANGGOTA</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO HP</th>
                </tr>   
        		<tr>
                    <?php while ($data=mysqli_fetch_assoc($Result)):?>
        			<td><?= $data['id_anggota']; ?></td>
        			<td><?= $data['nama_anggota']; ?></td>
        			<td><?= $data['alamat_anggota']; ?></td>
        			<td><?= $data['nohp_anggota']; ?></td>
        		</tr>
		          <?php endwhile ;?>
            </table>
    </body>
            <footer style="margin-top: 420px;">
                <center>
                    Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
                </center>
            </footer>
    </html>