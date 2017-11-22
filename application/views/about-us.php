<!DOCTYPE html>
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style-about-us.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/navbar.js"></script>
</head>

<body>

	<header>
		<div class="navbar">
			<img id="logo" src="img/logo.png">
			<img class="menu-toggle" src="img/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					<li><a href="index.html">Home</a></li>
					<li><a href="deliver-now.html">Deliver Now</li>
					<li><a href="services.html">Services</a></li>
					<li class="active-link">About Us</li>
				</ul>
			</nav>
		</div>
		
	</header>

	<div class="container">
		<div class="welcome-page">
			<h1>Hello, Welcome to Thunder Express</h1>
			<h1>Meet Our Team</h1>
			<div class="team">
				<div class="row">
					<a href="#bariq"><img class="team-photo" id="team-photo-one" src="img/bariq.png" alt=""></a>
					<a href="#syifa"><img class="team-photo" id="team-photo-two" src="img/syifa.png" alt=""></a>
					<a href="#adit"><img class="team-photo" id="team-photo-three" src="img/adit.png" alt=""></a>
				</div>
			</div>
			<a href="#history" class="history-btn">Our History</a>
		</div>

		<div class="history-page" id="history">
			<h1>Thunder Express History</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	
	<div class="profile-content">
		<div class="team-page" id="bariq">
				<div class="row">
					<div class="profile col-sm-6">
						<p>Bariq Mbani</p>
						<p>As Front End Developer and Web Designer</p>
					</div>
					<div class="photo col-sm-6">
						<img class="profile-photo" src="img/bariq.png" alt="Bariq Mbani">
					</div>
				</div>
			</div>

			<div class="team-page" id="syifa">
				<div class="row">
					<div class="photo col-sm-6">
						<img class="profile-photo" src="img/syifa.png" alt="Syifa Fauziyah Nurul Islam">
					</div>
					<div class="profile col-sm-6">
						<p>Syifa Fauziyah Nurul Islam</p>
						<p>As Back End Developer and Database Designer</p>
					</div>
				</div>
			</div>

			<div class="team-page" id="adit">
				<div class="row">
					<div class="profile col-sm-6">
						<p>Aditya Rizky Fadhillah</p>
						<p>As Front End Developer and Web Designer</p>
					</div>
					<div class="photo col-sm-6">
						<img class="profile-photo" src="img/adit.png" alt="Aditya Rizky Fadillah">
					</div>
				</div>
			</div>
		</div>
</body>