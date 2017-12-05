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
					<li>
						<div id="button">
							<a href="#popup">Login</a>
						</div>
						<div id="popup">
							<div class="window">
							<a href="#" class="close-button" title="Close">X</a>
							<form action="POST" name="login">
								<label>Login</label><br>
								<label>Username </label>
								<input type="text"><br>
								<label>Password</label>
								<input type="password"><br>
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
							<form action="POST" name="login">
								<label>Sign Up</label><br>
								<label>Username</label>
								<input type="text"><br>
								<label>Password</label>
								<input type="password"><br>
								<label>Confirm Pasword</label>
								<input type="password"><br>
								<label>Nama</label>
								<input type="text"><br>
								<label>Phone</label>
								<input type="text"><br>
								<label>City</label>
								<input type="text"><br>
								<label>Address</label>
								<input type="text"><br>
								<button class="button">Sign Up</button><br> <br>		
								</form>
							</div>
						</div>
					</li>

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
					<button class="button">Find</button>
				</form>
			</div>

			<div class="fromto col-sm-4">
				<form method="POST" name="fromto">
					<table border="0">
						<tr>
							<td><label>From</label></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><br></td>
							<td><br></td>
						</tr>
						<tr>
							<td><label>To</label></td>
							<td><input type="text"></td>
						</tr>
					</table>
				</form>
			</div>

			<div class="tariff-check col-sm-4">
				<form method="POST" name="tariff">
					<label>Tariff Check</label>
					<table border="0">
						<tr>
							<td align="center"><label>Weight</label></td>
							<td><input type="text"></td>
							<td style="font-weight: bold; color: gray; font-size: 1.2em;">KG</td>
						</tr>
						<tr>
							<td align="center"><label>Dimension</label></td>
							<td><input type="text" placeholder="L"></td>
							<td><input type="text" placeholder="W"></td>
							<td><input type="text" placeholder="H"></td>
						</tr>
					</table>
					<button class="button">Check</button>
				</form>
			</div>
		</div>

	</div>
	<footer>
		<div class="row">
			<div class="foot1 col-sm-4">
				<h5>SERVICE</h5>

				<table id="foot-table">
					<tr>
						<td><a href="#">Home</a></td>
					</tr>
					<tr>
						<td><a href="#">Deliver Now</a></td>
					</tr>
					<tr>
						<td><a href="#">Services</a></td>
					</tr>
					<tr>
						<td><a href="#">About Us</a></td>
					</tr>
				</table>
			</div>

			<div class="foot2 col-sm-4">
				<h5>INFORMATION</h5>

				<table>
					<tr>
						<td><a href="#">FAQ</a></td>
					</tr>

					<tr>
						<td><a href="#">Privacy and Policy</a></td>
					</tr>
				</table>
			
			</div>

			<div class="foot3 col-sm-4">
				<h5>FIND US AT</h5>
				
			</div>
		</div>
	</footer>

</body>
</html>
