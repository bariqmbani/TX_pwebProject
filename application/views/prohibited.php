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
			<img class="menu-toggle" src="<?php base_url(); ?>assets/img/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<li><a href="<?php echo base_url(); ?>index.php/c_index">Home</a></li>
					<li><a href="<?php echo base_url()."index.php/c_index/deliver" ?>">Deliver Now</li>
					<li class="active-link">Prohibited</li>
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
							</form>
						</div>
					</div>
				</li> <?php }
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
		<h1 class="header">Prohibited Items</h1>
	</div>
	
		<div class="prohibited-box row">
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/1.png" alt="Firearms" width="100px;">
					<h4>Firearms</h4>
					<p>All kinds of ammunitions, firearms, bullets, grenades, bombs, etc.</p>
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/2.png" alt="Explosive Materials" width="100px;">
					<h4>Explosive Materials</h4>
					<p>Easily explosive materials like explosive materials & detonator, gunpowder, firecrackers, etc.</p>
				</center>				
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/3.png" alt="Flammable" width="100px;">
					<h4>Flammable</h4>
					<p>All kinds of flammable material, including liquid, gas and solid chemistry. Like gasoline, kerosene, alcohol, varnish, diesel fuel, aerosol/ spray tube, lighters, gas holder, phosphorus, sulfur, matches, etc.</p>
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/4.png" alt="Drugs" width="100px;">
					<h4>Drugs</h4>
					<p>All kinds of nrcotic drugs like, opium (including flowers, sprout, and opium leaf), morn, cocaine, heroin, marijuana, methamphetamine, ophedrine, and other related products.</p>
				</center>				
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/5.png" alt="Chemical" width="100px;">
					<h4>Chemical</h4>
					<p>All kinds of corrosive materials like sulfuric acid, hydrochloric acid, nitric acid, organic solvents, pesticide, hydrogen peroxide, and other hazardous chemicals.</p>
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/6.png" alt="Radioactive" width="100px;">
					<h4>Radioactive</h4>
					<p>Various types of radioactive elements and its depository like uranium, cobalt, radium and plutonium.</p>
				</center>				
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/7.png" alt="Propaganda Materials" width="100px;">
					<h4>Propaganda Materials</h4>
					<p>Goods that endanger national security and stability of publication for social and political like, propaganda materials and its printing materials etc.</p>
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/8.png" alt="Organs" width="100px;">
					<h4>Organs</h4>
					<p>Variuos goods that can harm health, like animal b or other limbs, animal organs, unproccesed animal skins, and animal b without or before safely process.</p>
				</center>				
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/9.png" alt="Prohibited By Law" width="100px;">
					<h4>Prohibited By Law</h4>
					<p>Goods that are prohibited to be circulated according to laws and regulation of country like, document, state secret information, currency, counterfeit m, all kinds of securities paper, replica weapons, sharp weapon, art goods, rare animals and finished product.</p>
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<img src="<?php echo base_url(); ?>assets/img/prohibited/10.png" alt="Firearms" width="100px;">
					<h4>Inappropriate Packaging Material</h4>
					<p>Goods with inappropriate packaging, which can endanger, caused pollution, or goods that can pollute partial or total part of other shipment.</p>
				</center>				
			</div>
		</div>
	
</body>
</html>
