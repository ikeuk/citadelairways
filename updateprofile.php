<?php require_once 'session.php'; ?>
<?php  require_once 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])) {
            $id = $post['id'];
            $delivery_schedule =$post['delivery_schedule'];
            $last_location = $post['last_location'];
            $origin = $post['origin'];
            $destination = $post['destination'];
            $service_mode = $post['service_mode'];
            $type_service = $post['type_service'];
            $weight = $post['weight'];
            $collection_date_time = $post['collection_date_time'];
            $shipping_description = $post['shipping_description'];
            $name1 = $post['name1'];
            $phone1 = $post['phone1'];
            $address1 = $post['address1'];
            $name2 = $post['name2'];
            $phone2 = $post['phone2'];
            $address2 = $post['address2'];
           
            $sql = ("UPDATE backing SET delivery_schedule=:delivery_schedule, last_location=:last_location, origin=:origin, destination=:destination, service_mode=:service_mode, type_service=:type_service, weight=:weight, collection_date_time=:collection_date_time, shipping_description=:shipping_description, name1=:name1, phone1=:phone1,address1=:address1, name2=:name2, phone2=:phone2, address2=:address2 WHERE id = :id");
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute(array(':id'=> $id, 'delivery_schedule'=>$delivery_schedule, ':last_location'=>$last_location,'origin'=>$origin,'destination'=>$destination,'service_mode'=>$service_mode,'type_service'=>$type_service,'weight'=>$weight,'collection_date_time'=>$collection_date_time,'shipping_description'=>$shipping_description,'name1'=>$name1,'phone1'=>$phone1,'address1'=>$address1,'name2'=>$name2,'phone2'=>$phone2,'address2'=>$address2));
            if($result){
            	$message = "Profile Successfully Updated.";
                // header("location: mypage.php?profileupdate=1");
            } else {
                $message = "You have an error.";
            }
           
        }
?>
<?php
        $id = (int) $_GET['id'];
        $sql = 'SELECT * FROM backing WHERE id = :id LIMIT 1';
              $stmt = $pdo->prepare($sql);
             $rows = $stmt->execute(array(':id' => $id));
              $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>
<?php foreach($rows as $row) : ?>
              
              <?php endforeach; ?>
<?php include("includes/header.php"); ?>
<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->

<!-- contact -->
<section class="contact py-5 my-lg-5">
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

	<div class="map">
		<div class="main_grid_contact">
			<div class="form">
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
				<h4> Update Client Profile.</h4>
				<h3 class="text-capitalize mb-2">From Address</h3>
				 <?php foreach($rows as $row) : ?>
				<form action="updateprofile.php?id=<?php echo $row['id']; ?>" method="post">
					<div class="input-group">
						 <input  type="hidden" name="id" value="<?php echo $row['id']; ?>"  required=>
						 <h4>Delivery Date of journey</h4>
						<input type="date" class="margin2" name="delivery_schedule" value="<?php echo $row['delivery_schedule']; ?>" required="">
						<input type="text" name="last_location" value="<?php echo $row['last_location']; ?>" required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="origin" value="<?php echo $row['origin']; ?>" required="">
						<input type="text" name="destination" value="<?php echo $row['destination']; ?>"  required="">
					</div>
					<div class="input-group">
  
						<input type="text" class="margin2" name="service_mode" value="<?php echo $row['service_mode']; ?>"  required="">
						<input type="text"  name="type_service" value="<?php echo $row['type_service']; ?>">
						
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="shipping_description" value="<?php echo $row['shipping_description']; ?>"  required="">
						<input type="text" name="weight" value="<?php echo $row['weight']; ?>" required="" >
					</div>
					<div class="input-group">
						<h4>Collection Date</h4>
						<input type="date" class="margin2" name="collection_date_time" value="<?php echo $row['collection_date_time']; ?>"  required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="name1" value="<?php echo $row['name1']; ?>"  required="">
						<input type="text" name="phone1" value="<?php echo $row['phone1']; ?>" required="" >
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="address1" value="<?php echo $row['address1']; ?>"  required="">
						
					</div>
			</div>
			<div class="form">
				<h3 class="text-capitalize mb-2">To Address</h3>
					<div class="input-group">
						<input type="text" class="margin2" name="name2" value="<?php echo $row['name2']; ?>" required="">
						<input type="text" name="phone2" value="<?php echo $row['phone2']; ?>">
					</div>
					
					<div class="input-group">
						<input type="text" class="margin2" name="address2" value="<?php echo $row['address2']; ?>"  required="">
						<input type="text" name="" placeholder="Apt, Floor, Suite, etc (Optional)">
					</div>
					<div class="input-group">
					<input type="hidden" class="margin2" name="tracking_no" value="<?php echo $row['track_no']; ?>"  required="">
					</div>
					
					<div class="input-group">
						<input type="text" class="margin2" name="R_EIN" placeholder="EIN number (Optional)">
						<input type="text" name="national_id" placeholder="National ID (Optional)">
					</div>
					<checked value="">This is a residential address</checked>
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>
					&nbsp;&nbsp;
					<div class="container">
					 <a href="mypage.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize; float: right;">
						  Go Back
						</a>
						</div>
						   <div class="clearfix"> </div>
				</form>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<?php include("includes/footer.php"); ?>
