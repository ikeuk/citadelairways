<!DOCTYPE html>
<html lang="en">
<head>
<title>England Courier And Logictics Services</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Logistic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script> 
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">

	<!-- //google fonts -->
	
</head>
<body>
<!-- //header -->
<header>
	<div class="container">
		<!-- top header -->
		<div class="row top_header pt-3">
			<div class="col-lg-3 offset-lg-7 col-md-5 offset-md-3 col-sm-6 col-7 offset-sm-2 top-grid">
				<span class="fa ml-3 fa-envelope-open-o"></span>
				<p class=""><a href="mailto:info@example.com">info@example.com</a> <span class="block">Contact Support</span> </p>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-5 top-grid pl-0">
				<span class="fa ml-3 fa-phone"></span>
				<p class=""> +11 2345 6789 <span class="block">24/7 Helpline</span> </p>
			</div>
		</div>
		<!-- top header -->
		<!-- nav -->
		
		<nav class="pt-2">
			<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-ship"></span> Logistic</a></h1>
			</div>
			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop" />
			
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-3 mr-2 p-0">
					<!-- First Tier Drop Down -->
					<label for="drop-2" class="toggle">Shipping <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
					<a href="#">Shipping <span class="fa fa-angle-down" aria-hidden="true"></span></a>
					<input type="checkbox" id="drop-2"/>
					<ul class="inner-dropdown">
						<li><a href="login.php">Ship All Features</a></li>
						<li><a href="en_np_features.php">Ship Quick & Simple</a></li>
						<li><a href="login.php">Schedule & Manage Pickups</a></li>
						
					</ul>
				</li>
				<li class="mr-lg-3 mr-2 p-0">
					<!-- First Tier Drop Down -->
					<label for="drop-2" class="toggle">Tracking<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
					<a href="#">Tracking<span class="fa fa-angle-down" aria-hidden="true"></span></a>
					<input type="checkbox" id="drop-2"/>
					<ul class="inner-dropdown">
						<li><a href="tracking.php">Track</a></li>
						<li><a href="login.php">Advanced Shipment Tracking</a></li>
						<li><a href="tracking.php">ALL TRACKING SERVICES</a></li>
					</ul>
				</li>
				<li class="mr-lg-3 mr-2 p-0">
					<!-- First Tier Drop Down -->
					<label for="drop-2" class="toggle">Support <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
					<a href="#">Support <span class="fa fa-angle-down" aria-hidden="true"></span></a>
					<input type="checkbox" id="drop-2"/>
					<ul class="inner-dropdown">
						<li><a href="customerTools.php">Customs Tools</a></li>
						<li><a href="Locations.php">Locations</a></li>
						<li><a href="contact.php">CONTACT US</a></li>
					
					</ul>
				</li>
				<?php if (isset($_SESSION['is_logged_in'])) : ?> 
						<li><a href="logout.php">logout</a></li>
						<?php elseif(isset($_SESSION['is_log_in'])) : ?>
					<li><a href="logout.php">logout</a></li>
				<?php else : ?>
				<li class="mr-lg-3 mr-2 p-0">
					<!-- First Tier Drop Down -->
					<label for="drop-2" class="toggle">Account <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
					<a href="#">Account <span class="fa fa-angle-down" aria-hidden="true"></span></a>
					<input type="checkbox" id="drop-2"/>
					<ul class="inner-dropdown">
						<li><a href="gallery.php">AirWays Gallery</a></li>
						<li><a href="login.php">My Profile</a></li>
						<li><a href="account.php">OPEN AN ACCOUNT</a></li>
					</ul>
				</li>
					
			</ul>
			<?php endif; ?>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->