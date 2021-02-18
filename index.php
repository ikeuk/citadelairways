<?php require_once 'session.php'; ?>
<?php require 'model.php'; ?>
<?php
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
            if(isset($post['submit'])) { 

            $email = $post['email']; 

        $sql = 'SELECT * FROM users WHERE email = :email LIMIT 1';
        $stmt = $pdo->prepare($sql);
      $stmt->execute(array(':email' => $email)); 
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row){
           $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                header('location:page.php'); 
       }else{
       	$message = "Incorect Email Track ID";
        // header('location:track.php?wrong=1'); 
       }
     }
            
?>
<?php include('includes/header.php'); ?>		
<!-- banner -->
<section class="banner position-relative" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="slider-info">
				<div class="agileinfo-logo mt-lg-5">
					<div class="banner-info">
					<h2>Welcome to Airways<br></h2>
					 <div class="container">
							 <?php if(isset($message)) : ?>
					               <div class="alert alert-danger alert-dismissable">
					                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
					                     <?php echo $message; 
					                     unset($message);
					                  ?>
					               </div>
					            <?php endif; ?>
       				 </div>
					 <form action="index.php" method="post" class="">
						     <input type="email" name="email" placeholder="TRACKING ID BY EMAIL">
						     <button type="submit" class="btn" name="submit"><span class="fa fa-paper-plane"></span>TRACK</button>
						  <a href="help.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  NEED HELP?
						</a>
						   <div class="clearfix"> </div>
					 </form>
					</div>
				</div>
			</div>
		</div>
		<div class="choose text-center position-absolute d-lg-flex">
			<div class="choose-icon">
				<span class="fa fa-ship" aria-hidden="true"></span>
				<div class=" choose-grid">
					<h3 class="mt-4">Sea Freight</h3>
					<p class="">Shipping via Sea.</p>
				</div>
			</div>
			<div class="choose-icon">
				<span class="fa fa-truck" aria-hidden="true"></span>
				<div class="choose-grid">
					<h3 class="mt-4">Truck Transport</h3>
					<p class="">Container Shipping.</p>
				</div>
			</div>
			<div class="choose-icon">
				<span class="fa fa-ship" aria-hidden="true"></span>
				<div class="choose-grid">
					<h3 class="mt-4">Ocean Freight</h3>
					<p class="">Shipping via Ocean.</p>
				</div>
			</div>
			<div class="choose-icon">
				<span class="fa fa-plane" aria-hidden="true"></span>
				<div class="choose-grid">
					<h3 class="mt-4">Air Freight</h3>
					<p class="">Shipping via Air.</p>
				</div>
			</div>
			<div class="choose-icon mr-0">
				<span class="fa fa-truck" aria-hidden="true"></span>
				<div class="choose-grid">
					<h3 class="mt-4">Land Freight</h3>
					<p class="">Shipping via vehicles.</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="how">
	<div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-6 about-left">
				<img src="images/g2.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
				<h3 class="my-lg-4 mb-2">Safety above all</h3>
				<p class="">We recognize the trust you place in us when we deliver to your doorstep, shipping dock or place of business. That’s why we want to keep you informed on the actions we are taking to keep you – and our team members – safe amidst the COVID-19 outbreak.</p>
				 <a href="safety.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  LEARN MORE
						</a>
						   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- services -->
<section class="services py-5 bg-clr" id="services">
	<div class="container py-lg-5">
		<div class="row mt-lg-5">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-md-0 mb-4">
				<h4 class="heading mt-3 ml-3">We Provide Safe & Secure Shipping Services around the world</h4>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-icon">
							<span class="fa fa-ship" aria-hidden="true"></span>
						</div>
						<div class="our-services-text">
							<h4>Sea freight</h4>
							<p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-icon">
							<span class="fa fa-truck" aria-hidden="true"></span>
						</div>
						<div class="our-services-text">
							<h4>Truck Transport</h4>
							<p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-md-0 mb-60">
					<div class="services-inner">
						<div class="our-services-icon">
							<span class="fa fa-ship" aria-hidden="true"></span>
						</div>
						<div class="our-services-text">
							<h4>Ocean Freight</h4>
							<p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-md-0 mb-60">
					<div class="services-inner">
						<div class="our-services-icon">
							<span class="fa fa-plane" aria-hidden="true"></span>
						</div>
						<div class="our-services-text">
							<h4>Air Freight</h4>
							<p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper">
					<div class="services-inner">
						<div class="our-services-icon">
							<span class="fa fa-truck" aria-hidden="true"></span>
						</div>
						<div class="our-services-text">
							<h4>Land Freight</h4>
							<p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- stats -->
<section class="stats py-5">
	<div class="container py-lg-5 py-md-3">
		<div class="row stat-grids">
			<div class="col-lg-5">
				<h4 class="heading mb-3">Staying connected during uncertain times is more important than ever</h4>
				<p class="">You can track, check transit time and arrange pickup online, or write us for help.</p>
			</div>
			<div class="col-lg-6 offset-lg-1 stats-right">
				<div class="row stats-inner-grid">
					<div class="col-sm-6 col-6">
						<h4>950</h4>
						<p>Satisfied <br>Clients</p>
					</div>
					<div class="col-sm-6 col-6">
						<h4>250+</h4>
						<p>Branches <br>Worldwide</p>
					</div>
				</div>
				<div class="row stats-inner-grid mt-5">
					<div class="col-sm-6 col-6">
						<h4>350</h4>
						<p>Shipments <br>Completed</p>
					</div>
					<div class="col-sm-6 col-6">
						<h4>100%</h4>
						<p>Safe <br>Shipping</p>
					</div>
				</div>
			</div>
			 <a href="contact.html"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  SEE HOW
						</a>
						   <div class="clearfix"> </div>
		</div>
	</div>
</section>
<!-- //stats -->

<!-- shipping -->
<section class="shipping py-5">
	<div class="container py-lg-5 py-md-3">
		<div class="row">
			<div class="col-lg-5 p-md-0">
				<img src="images/about.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-7 p-0 mt-lg-0 mt-4">
				<div class="shipping-right">
					<h4 class="heading"> Customs Made Easier.</h4>
						<p class="mt-3">Learn about all the tools AirWays has to offer for shipping across borders. Prepare and find international documents, estimate duties and taxes, search country profiles, harmonized codes and much more.</p>
						 <a href="customerTools.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  SEE SOLUTIONS
						</a>
						   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //shipping -->

<!--/Blog-Posts-->
<section class="banner-bottom-w3layouts py-5" id="blog">
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-md-3">
			<!--/services-grids-->
			<div class="row blog-sec">
				<div class="col-lg-4 manager-img mb-lg-0 mb-4">
					<h4 class="heading"> When you and your customers need it most</h4>
					<p class="mt-4">Global efforts to stop the spread of COVID-19 have changed the world—and the way you do business—overnight. We’re here to help your business deliver when you and your customers need it most.</p>
					<img src="images/signature.jpg" alt="" class="img-fluid img1">
				</div>
				<div class="col-lg-4 col-md-6 about-in blog-grid-info text-left">
					<div class="card img">
						<div class="card-body img">
							<img src="images/account.jpeg" alt="" class="img-fluid">
							<div class="blog-des mt-3">
								<h5 class="card-title mt-4">Open a AirWays account</h5>
								<p class="card-text">Benefit from our services and solutions designed to meet all of your shipping needs. Sign up for a AirWays shipping account below.
								</p>
								 <a href="account.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  LET’S GET STARTED
						</a>
						   <div class="clearfix"> </div>
							
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-md-0 mt-5">
					<div class="card img">
						<div class="card-body img">
							<img src="images/notice.jpeg" alt="" class="img-fluid">
							<div class="blog-des mt-3">
								<h5 class="card-title mt-4">Service and Regulatory updates</h5>
								<p class="card-text">Stay connected with the latest service impacts due to the COVID-19 outbreak.
								</p>
								 <a href="contact.html"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  CHECK THEM HERE
						</a>
						   <div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--//Blog-Posts-->

<!-- //footer-top -->

<!--footer -->
<?php include("includes/footer.php"); ?>