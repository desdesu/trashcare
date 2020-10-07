<?php 
    include 'database.php';
    session_start();
    
    if($_SESSION['login']==true){
        $_SESSION['status'];
        $_SESSION['email'];
    }
    else{ $_SESSION['login'] = false; }
?>
<!DOCTYPE html>
<html> 
	<head>
		<title>About Us</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/bawah.css">
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
	<strong>
		<font size=5>
			<span style="background-color:black;">
		<center>	
		<div style="background-color:white">
				<hr> 
					<font face=arial color=black> 
						<h3><b> About Us </b></h3>
				<hr> 
		</center>	
		<div class="container" style="background-color: green; width: 100%; max-width: 1400px; padding-top: 2px;">
			<font face=arial color=white> 
				<p> <marquee> TOLONG SELAMATKAN BUMI !!!! </p> </marquee>
					<img class="gambar" src="../hiya.jpg" align="left" width="600" height="600"></img> 
			</font>
			<div class="menubar">
				<center>
					<font face=arial color="white" size=18> 
						<table width="550" border="40" cellpadding="0">
							<td><p align="center"><center> VISI </p></td>
				
						</table>
					</font>
				</center>
				<p align="right"><font size="3"><font face="TNR" color="white"> <p> &emsp; &emsp; "Terwujudnya Pelestarian Lingkungan Hidup yang dilandasi Peduli, Handal dan <br> &emsp; &emsp; Proaktif dalam menata sampah dengan cara yang lebih baik"</P>
			</div>
			<div class="menubar">
				<center>
					<font face=arial color="white" size=18> 
						<table width="550" border="40" cellpadding="0">
							<td><p align="center"><center> MISI </p></td>
						</table>
					</font>
				</center>
						<p align="right"><font size="3"><font face="TNR" color=white> <p>&emsp; &emsp;"Menentukan Arah Kebijakan dan Melaksanakan Penataan, Pengendalian <br> &emsp; &emsp; Dampakdan Pemulihan Lingkungan Hidup Agar Terlaksananya <br> &emsp; &emsp; Pembangunan Berkelanjutan Yang "</p>
			</div>
			<section>
				<article class="article">
					<article class="aktiv">
						<h1>TrashCare</h1>
							<p font size="3" font face="Times new romans" color=black>Anak muda yang berkumpul, berdiskusi, bergerak dan mengambil sikap untuk merspon persoalan-persolan yang ada dilingkungan sekitarnya adalah mereka yang memiliki mimpi-mimpi masa depan yang lebih baik dibanding sikap individualis manuasia yang hanya mementingkan diri pribadi. Perkumpulan-perkumpulan yang dimaksudkan bisa saja berbentuk komunitas, Club, Paguyuban, lembaga masyarakat, Kelompok pemuda dan sebagainya</p>
					</article>           
				</article>    	
			</section>
		</div>
	</strong>
	</body>
	<footer style="margin-top: 10px;">
			<center>
				Copyright TRASHCARE 2019 | ALL RIGHTS RESERVED<br>
			</center>
	</footer>
</html>	