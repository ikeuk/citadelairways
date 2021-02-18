<?php require_once 'session.php'; ?>
<?php  require 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php
       $errors = array(); 
 
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        if(isset($post['submit'])){

         $id = $post['id'];
         $delivery_schedule = $post['delivery_schedule'];
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
          $tracking_no = $post['tracking_no'];

           $emailQuery = "SELECT * FROM backing WHERE tracking_no = :tracking_no LIMIT 1";
         $stmt = $pdo->prepare($emailQuery);
          $result = $stmt->execute(array(':tracking_no' => $tracking_no));
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $userCount = $stmt->rowCount();
          if ($userCount > 0) {
            $errors['tracking_no']  = "Track_no Already Exists";
            // header('location:mypage.php?failure=1');
            $message = "Track_no Already Exists";
          }
          if (count($errors) === 0) {
         
         $sql = 'INSERT INTO backing (user_id,delivery_schedule, last_location,origin,destination,service_mode,type_service,weight,collection_date_time,shipping_description,name1,phone1,address1,name2,phone2,address2,tracking_no) VALUES (:user_id, :delivery_schedule, :last_location, :origin, :destination, :service_mode, :type_service, :weight, :collection_date_time, :shipping_description, :name1, :phone1,:address1, :name2, :phone2, :address2, :tracking_no)';
         $stmt = $pdo->prepare($sql);
         $stmt->execute(array(':delivery_schedule'=>$delivery_schedule, ':last_location'=>$last_location, ':origin'=>$origin, ':destination'=>$destination, ':service_mode'=>$service_mode, ':type_service'=>$type_service, ':weight'=>$weight, ':collection_date_time'=>$collection_date_time, ':shipping_description' => $shipping_description, ':name1'=>$name1, ':phone1'=>$phone1, ':address1' =>$address1, ':name2'=>$name2, ':phone2'=>$phone2, ':address2'=>$address2, ':tracking_no'=>$tracking_no, ':user_id'=>$id,));
         if ($stmt) {
              // header('location:mypage.php?success=1');
         	$message = "Successfully Created.";
           } else {
           $message = "An Error Occured";
           }
        }
   }
?>
<?php
            if (isset($_GET['search'])) {
               $setname = (int) $_GET['search'];
           
      $sql = 'SELECT * FROM users WHERE id = :id LIMIT 1';
            $stmt = $pdo->prepare($sql);
           $rows = $stmt->execute(array(':id' => $setname));
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

}else{
   $setname = NULL;
}
?>
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
				<h4> Enter your (From) address and the recipient's (To) address.</h4>
				<h3 class="text-capitalize mb-2">From Address</h3>
				 <?php foreach($rows as $row) : ?>
				<form action="add.php?search=<?php echo $row['id']; ?>" method="post">
					<div class="input-group">
						 <input  type="hidden" name="id" value="<?php echo $row['id']; ?>"  required=>
						 <h4>Delivery Date of journey</h4>
						<input type="date" class="margin2" name="delivery_schedule" placeholder="Delivery Date of Journey" required="">
						<input type="text" name="last_location" placeholder="Last Destination" required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="origin" placeholder="Originating Company" required="">
						<input type="text" name="destination" placeholder="Destination" required="">
					</div>
					<div class="input-group">
  
						<input type="text" class="margin2" name="service_mode" placeholder="Service Mode"  required="">
						<input type="text"  name="type_service" placeholder="Type Service" >
						
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="shipping_description" placeholder="Enter Shipping Description"  required="">
						<input type="text" name="weight" placeholder="Weight" required="" >
					</div>
					<div class="input-group">
						<h4>Collection Date</h4>
						<input type="date" class="margin2" name="collection_date_time" placeholder="Collection Date And Time: "  required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="name1" placeholder="Enter Sender Name"  required="">
						<input type="text" name="phone1" placeholder="Enter Sender Phone" required="" >
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="address1" placeholder="Enter Sender Address"  required="">
						
					</div>
			</div>
			<div class="form">
				<h3 class="text-capitalize mb-2">To Address</h3>
					<div class="input-group">
						<input type="text" class="margin2" name="name2" placeholder="Name Of Reciever" required="">
						<input type="text" name="phone2" placeholder="Enter Receiver Phone no">
					</div>
					
					<div class="input-group">
						<input type="text" class="margin2" name="address2" placeholder="Receiver Street Address"  required="">
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
