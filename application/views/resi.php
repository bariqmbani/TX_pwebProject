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

</body>
</html>
