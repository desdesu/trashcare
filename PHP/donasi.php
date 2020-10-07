<?php 
    include 'database.php';
    session_start();
    $status =  $_SESSION['status'];
    $email = $_SESSION['email'];
    $query="SELECT * FROM $status WHERE email_$status = '$email'";
	$result=getData($query);
	// if($_SESSION['login']==true){
    //     $_SESSION['status'];
    //     $_SESSION['email'];
    // }
    // else{ $_SESSION['login'] = false; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login & Sign UP</title>
		<link rel="stylesheet" type="text/css" href="../css/sign.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
		<center>
				<div class="header">
					<table  class="menu">
						<tr>
							<td align="left" style="padding-right:500px;">
								<font style="font-size: 30px; margin-left: -20px;">TR<img src="../tc.png" width="30" height="30">SHCARE</font>
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
<?php $data=mysqli_fetch_assoc($result);
    	$id = $data['id_'.$status.''];
?>
<div class="containera" id="containera">
	<div class="form-container sign-up-container">
		<form action="../PHP/donate.php" method="POST">
			<h1>Donate Dump</h1>
			<span>Create Your Waste Banks</span><br>
			<?=$data['email_'.$status.'']?>
			<input type="text" name="alamat" placeholder="Alamat" />
			<!-- <label><b>Gambar</b></label> -->
			<select name="sampah">
				<option value="Plastik">Plastik</option>
				<option value="Kaleng">Kaleng</option>
				<option value="Aluminium">Aluminium</option>
			</select>
			<select name="pengiriman">
				<option value="Pick Up">Pick Up</option>
				<option value="On Deliver">On Deliver</option>
			</select>
			<?php if($_SESSION['login']==true){?>
			<button type="submit" name="donation" onclick="myFunction()">Donate</button>
			<?php } ?>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="../PHP/donate.php" method="POST">
			<h1>Donation</h1>
			<span>TO HELPING OUR COMMUNITY</span><br>
			<?=$data['email_'.$status.'']?>
			<input type="text" name="pay" placeholder="Jumlah Bayar" />
			<label><b>Jenis Bayar</b></label>
			<select name="status">
				<option value="M-Banking">M-Banking</option>
				<option value="Paypal">Paypal</option>
			</select>
			<?php if($_SESSION['login']==true){?>
			<button type="submit" name="donation" onclick="myFunction()">Cetak</button>
			<?php } ?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Buddy</h1>
				<p>
					Help Us to make A better World and <br>i introduce to you
					Waste Banks. Life is most impportant thing in this world

				</p>
				<button class="ghost" id="signIn">Donate</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, World!</h1>
				<p> 	
					Support our work
					Trash Care mobilises thousands of people around the world to take action
					on waste in their communities, change their everyday behaviour and reduce 
					their dependency on single use plastic. We need your help to do this. 
					Make a donation or a monthly gift to Trash Care, because together we 
					can make a better world!

				</p>
				<button class="ghost" id="signUp">Donate Dump</button>
			</div>
		</div>
	</div>
</div>
<script>
	function myFunction() {
        alert("Thanks For Your Donation!!!");
        }
</script>
<footer>
	<p>
		Created By TrashCare
	</p>
</footer>
<script src="../js/red.js"></script>
    </body>
</html>