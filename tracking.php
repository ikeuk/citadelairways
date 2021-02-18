<?php include("includes/header.php"); ?>

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div> 
<!-- inner banner -->
<section class="contact py-5 my-lg-5">
	<h4 class="heading text-center mb-sm-5 mb-4"> Track the way you want </h4>
 <div class="container"> 
	
<!-- <div class="banner-text1">  -->

		<h5 class="heading text-center mb-sm-5 mb-4">Need the status of your shipment or proof of delivery? Enter your tracking number or reference number below.</h5>
			<div class="slider-info1">
					<p>Our tracking tools give you control over your shipments, by helping you stay informed so you can ship with confidence.</p>
				<div class="agileinfo-logo mt-lg-5">
					<p>Enter a AirWaysExpress tracking, door tag or AirWaysExpress Office order number.<br></p>
					<div class="banner-info1">
					 <form action="track_log.php" method="post" class="">
						     <input type="text" name="track_no" placeholder="TRACKING ID" required="">
						      <button type="submit" class="btn" name="submit"><span class="fa fa-paper-plane"></span>TRACK</button>
						   <div class="clearfix"> </div>
					 </form>
					</div>
					
				</div>
			</div>
		<!-- </div> -->
</div> 
 <!--track-->
<!--  <div class="container">
 	
            <div class="buttom-w3">
            <h3 class="title">IT IS NEARLY THERE YET?</h3>
            <div class="news-info text-center">
            <div class="post">
               <form action="log.php" method="post">
                  <div class="letter">
                     <input type="text" name="track_no" placeholder="Enter your trackig no..." required="">
                  </div>
                  <div class="newsletter">
                     <input type="submit" name="submit" value="Track my parcel">
                  </div>
               </form>
            </div>
            </div>
         </div>

 </div> -->
<!--track-->
<h1 class="heading text-center mb-sm-5 mb-4">Tracking Options</h1>
<hr />
</section>
<!-- about -->
<section class="about py-5" id="how">
	<div class="container py-lg-5">
		<div class="row about-grids">
			<!-- <div class="col-lg-6 about-left">
				<img src="images/about.jpg" alt="" class="img-fluid"/>
			</div> -->
			<div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
				<h3 class="my-lg-4 mb-2">AirWaysExpress Tracking</h3>
				<p class="">AirWaysExpress Tracking, the tool at the top of your page gives you shipment updates in just one click. A tool built for speed, simplicity and convenience. Save your shipments straight to our homepage, so you don't have to log in to find out where your packages are.</p>
				 <a href="contact.html"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  LEARN MORE
						</a>
						   <div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-6 about-left">
				<img src="images/about.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
				<h3 class="my-lg-4 mb-2">AirWaysExpress Mobile Tracking</h3>
				<p class="">AirWaysExpress Tracking for mobile is our most convenient tracking tool, giving you updates while you're on the go so you can stay on top of your shipments 24/7 and from any location. It offers all the power of AirWaysExpress Tracking in the palm of your hand.</p>
						   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</section>
	
<!-- //about -->
<?php include("includes/footer.php"); ?>