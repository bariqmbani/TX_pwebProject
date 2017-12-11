<!DOCTYPE html>
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
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
					<li><a href="<?php echo base_url(); ?>index.php/c_index/prohibited">Prohibited</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/c_index/about">About Us</a></li>
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
		<h1 class="header">Deliver Now</h1> <br>
		<div class="row">

			<div class="sender-info col-sm-6">

				<form method="POST" name="sender-info" action="<?php echo base_url('index.php/c_index/transaksi')?>">
					<h2 class="label">Sender Information</h2>
					<table border="0">
						<?php 
							//var_dump($users); die();
        					foreach ($users as $row) {

          				?>
						<tr>
							<td><label>Name</label></td>
							<td><input type="text" name="nama" value="<?php echo $row->nama;?>"></td>
						</tr>

						<tr>
							<td><label>Phone</label></td>
							<td><input type="text" name="no_telp" value="<?php echo $row->no_telp;?>"></td>
						</tr>
						<?php
				         }
				        ?>

						<tr>
							<td><label>City</label></td>
							<td><input type="text" name="kota1"></td>
						</tr>

						<tr>
							<td><label>Address</label></td>
							<td><input class="address" type="text" name="alamat_pengirim"></td>
						</tr>
					</table>
					</div>

				<div class="recipient-info col-sm-6">
					<h2 class="label">Recipient Information</h2>
					<table border="0">
						<tr>
							<td><label>Name</label></td>
							<td><input type="text" name="nama_penerima"></td>
						</tr>

						<tr>
							<td><label>Phone</label></td>
							<td><input type="text" name="telp_penerima"></td>
						</tr>

						<tr>
							<td><label>City</label></td>
							<td><input type="text" name="kota2"></td>
						</tr>

						<tr>
							<td><label>Address</label></td>
							<td><input class="address" type="text" name="alamat_penerima"></td>
						</tr>
					</table>
				</div>

				<div class="package-info col-sm-6">
					<h2 class="label">Package Information</h2>
					<table>
						<tr>
							<td><label>Item Name</label></td>
							<td><input type="text" name="nama_barang"></td>
						</tr>

						<tr>
							<td><label>Weight</label></td>
							<td><input type="text" name="berat_barang"></td>
						</tr>

						
					</table>
				</div>
				
				<div class="package-info col-sm-6">
					<table class="dimension">
						<tr>
							<td><label>Dimension</label></td>
							<td><input type="text" placeholder="L"></td>
							<td><input type="text" placeholder="W"></td>
							<td><input type="text" placeholder="H"></td>
						</tr>
					</table>
				</div>

				<div class="button deliver-btn">
					<input type="submit" value="Deliver Now" name="submit" class="button">
				</div>

			</form>
		</div>
	</div>


</body>
</html>
