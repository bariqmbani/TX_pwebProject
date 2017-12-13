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
					<li class="active-link">Home</li>
					<li><a href="<?php echo base_url()."index.php/c_index/deliver" ?>">Deliver Now</a></li>
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

	<div class="banner cycle-slideshow">
		<span class="cycle-prev">&#9001</span>
		<span class="cycle-next">&#9002</span>
		<span class="cycle-pager"></span>
		<img src="<?php echo base_url(); ?>assets/img/banner.png" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/img/banner2.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/img/banner3.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/img/banner4.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/img/banner5.jpg" height="100%" width="100%">
	</div>
	<div class="container">
		<div class="row">
			<div class="tracking col-sm-4">
				<form method="POST" name="tracking-finder">
					<label>Tracking</label>
					<br>
					<input type="text" placeholder="e.g 10200384">
					<br>
					<div id="button">
							<a href="#resi">FIND</a>
					</div>
					<div id="resi">
							<div class="window-resi">
							<a href="#" class="close-button" title="Close">X</a>
								<label>Tracking</label><br>
								<table>
								<tr>
									<th>Transaction Number</th>
									<th>Date Shipment</th>
									<th>Destination</th>
								</tr>
								<tr>
									<td>(empty)</td>
									<td>(empty)</td>
									<td>(empty)</td>
								</tr>
								</table>
									<table>
										<tr>
											<th>Sipper</th>
											<th>Consignee</th>
										</tr>
										<tr>
											<td>(empty)</td>
											<td>(empty)</td>
										</tr>
									</table>
								<table>
									<tr>
										<th>Shipment Status</th>
									</tr>
									<tr>
										<td>(empty)</td>
									</tr>
								</table>
							</div>
					</div>
				</form>
			</div>
			<form method="POST" name="check" action="<?php echo base_url('index.php/c_index/check')?>">
			<div class="fromto col-sm-4">
				<form method="POST" name="fromto" action="<?php echo base_url('index.php/c_index/check')?>">
					<table border="0">
						<tr>
							<td><label>From</label></td>
							<td><input type="text" name="kota1"></td>
						</tr>
						<tr>
							<td><br></td>
							<td><br></td>
						</tr>
						<tr>
							<td><label>To</label></td>
							<td><input type="text" name="kota2"></td>
						</tr>
					</table>
				</form>
			</div>

			<div class="tariff-check col-sm-4">
				<form method="POST" name="tariff" action="<?php echo base_url('index.php/c_index/check')?>">
					<label>Tariff Check</label>
					<table border="0">
						<tr>
							<td align="center"><label>Weight</label></td>
							<td><input type="text" name="berat_barang"></td>
							<td style="font-weight: bold; color: gray; font-size: 1.2em;">KG</td>
						</tr>
						<tr>
							<td align="center"><label>Dimension</label></td>
							<td><input type="text" placeholder="L" name="L"></td>
							<td><input type="text" placeholder="W" name="W"></td>
							<td><input type="text" placeholder="H" name="H"></td>
						</tr>
					</table>
					<div id="button">
							<a href="#check-harga">Check</a>
						</div>
					<div id="check-harga">
							<div class="window-check-harga">
							<a href="#" class="close-button" title="Close">X</a>
							<label>Tariff Check</label>
							<table>
								<tr>
									<td>Cost</td>
									<td>:</td>
									<td>(empty)</td>
								</tr>
							</table>
				</form>
			</div>
			</form>
		</div>

	</div>

</body>
</html>
