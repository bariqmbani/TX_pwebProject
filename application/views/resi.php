
<!DOCTYPE html> 
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body>

	<header>
		<div class="navbar">
			<img id="logo" src="<?php echo base_url(); ?>assets/img/logo.png">
			<img class="menu-toggle" src="<?php echo base_url(); ?>assets/img/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					<li><a href="<?php echo base_url(); ?>index.php/c_index">Home</a></li>
					<li class="active-link">Deliver Now</li>
					<li><a href="<?php echo base_url()."index.php/c_index/Prohibited" ?>">Prohibited</a></li>
					<li><a href="<?php echo base_url()."index.php/c_index/about" ?>">About Us</a></li>
					<?php
					if($this->session->userdata('status') != 'login' ){?>
					<li>
						<div id="button">
							<a href="#popup">Login</a>
						</div>
						<div id="popup">
							<div class="window">
							<a href="#" class="close-button" title="Close">X</a>
							<form action="<?php echo base_url()."index.php/c_index/login" ?>" method="POST" name="login">
								<label>Login</label><br>
								<label>Username </label>
								<input type="text" name="username"><br>
								<label>Password</label>
								<input type="password" name="password"><br>
								<button class="button">Login</button><br> <br>		
								<label>New On Thunder Express</label><br>	
								<div id="button">
									<a href="#popup-signup">Sign Up</a>
								</div>	
								</form>
							</div>
						</div>
					</li>
					<li>
						<div id="button">
							<a href="#popup-signup">Sign Up</a>
						</div>
						<div id="popup-signup">
							<div class="window-signup">
							<a href="#" class="close-button" title="Close">X</a>
							<form action="<?php echo base_url('index.php/c_index/signup') ?>" method="POST" name="signup">
								<label>Sign Up</label><br>
								<label>Username</label>
								<input type="text" name="username"><br>
								<label>Password</label>
								<input type="password" name="password"><br>
								<label>Confirm Pasword</label>
								<input type="password" name="c_password"><br>
								<label>Nama</label>
								<input type="text" name="nama"><br>
								<label>Phone</label>
								<input type="text" name="phone"><br>
								<div id="button">
									<input type="submit" value="SIGN UP" name="submit" class="button">
								</div>		
							</form>
							</div>
						</div>
					</li>
					<?php }
					else{
						?>
						<li>
						<div id="button">
							<a href="<?php echo base_url('index.php/c_index/logout')?>">Logout</a>
						</div>
					</li> <?php } ?>

				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<h1 class="header">RESI</h1> <br>
		<div class="row">

			<div class="sender-info col-sm-6">

				<!-- <form method="POST" name="sender-info" action="<?php  base_url('index.php/c_index/transaksi')?>"> -->
					<center>
						<br>
						<label>TRANSACTION ID</label>
						<p><?php echo $transaksi->id_transaksi;?></p>
						<br>
						<label>SENDER</label>
						<p><?php echo $users->nama;?></p>
						<p><?php echo $users->no_telp;?></p>
						<p><?php echo $transaksi->alamat_pengirim;?></p>

					</center>
			</div>

			<div class="col-sm-6">
				<center>
					<br>
					<label>DIRECTION</label>
					<p><?php echo $tujuan->kota1 , " - " , $tujuan->kota2;?></p>
					<br>
					<label>RECEIVER</label>
					<p><?php echo $transaksi->nama_penerima?></p>
					<p><?php echo $transaksi->telp_penerima?></p>
					<p><?php echo $transaksi->alamat_penerima?></p>
				</center>
			</div>
			<div class="col-sm-4">
				<center>
					<br>
					<br>
					<label>Item name: </label> <p><?php echo $barang->nama_barang;?></p>
				</center>
			</div>
			<div class="col-sm-4">
				<center>
					<br>
					<br>
					<label>Weight: </label> <p><?php echo $barang->berat_barang . " KG";?></p>
				</center>
			</div>
			<div class="col-sm-4">
				<center>
					<br>
					<br>
					<label>Dimension: </label> <p><?php echo $barang->dimensi . " cm3";?></p>
				</center>
			</div>
			<div class="col-sm-12">
				<br>
				<br>
				<center>
					<label>Price Total : Rp. <?php echo$transaksi->total_harga;?></label>

				</center>
			</div>
		</div>
	</div>



</body>
</html>
