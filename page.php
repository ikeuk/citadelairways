<?php require_once 'session.php'; ?>
<?php require_once "model.php"; ?>
<?php comfirm_is_logged_in(); ?>
<?php
         $casa = $_SESSION['user_data']['id'];

         $sql = 'SELECT * FROM locations WHERE user_id1 = :user_id1';
         $stmt = $pdo->prepare($sql);
         $rows = $stmt->execute(array(':user_id1' => $casa));
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
          $id2 = $_SESSION['user_data']['id'];
      //$id = $_GET['search'];
      //$id = $_POST['id'];
             $sql = 'SELECT * FROM backing WHERE user_id = :user_id LIMIT 1';
             $stmt = $pdo->prepare($sql);
          $rows = $stmt->execute(array(':user_id' => $id2));
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include("includes/header.php"); ?>
<style>
    .nav-black img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    max-height: 100%;
}
</style>
<?php foreach($rows as $item) : ?>
               
              <?php endforeach; ?>
              <!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->
	<div class="container">
       <div class="nav-black">
       <img src="images/origin.jpg" />
    </div>


	<div class="typo" id="typo">
		<div class="container">
    	<div class="appearance" align="center">
			 <h3 class="ghj">My Profile</h3>
				<div class="col-md-6">
					<!-- <p>Add modifier classes to change the appearance of a badge.</p> -->
					  <table class="table table-bordered">
						<thead>
							<tr>
								<th width="50%">Client Description</th>
								<th width="50%">Details</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tracking No</td>
								<td><span class="badge"><?php echo $item['tracking_no']; ?></span></td>
							</tr>
							<tr>
								<td>Delivery Schedule</td>
								<td><span class="badge"><?php echo $item['delivery_schedule']; ?></span></td>
							</tr>
							<tr>
								<td>Final Destination</td>
								<td><span class="badge"><?php echo $item['last_location']; ?></span></td>
							</tr>
							<tr>
								<td>Originating Company</td>
								<td><span class="badge"><?php echo $item['origin']; ?></span></td>
							</tr>
							<tr>
								<td>Destination state in <?php echo $item['last_location']; ?></td>
								<td><span class="badge"><?php echo $item['destination']; ?></span></td>
							</tr>
							<tr>
								<td>Service Mode</td>
								<td><span class="badge"><?php echo $item['service_mode']; ?></span></td>
							</tr>
							<tr>
								<td>Type Service</td>
								<td><span class="badge"><?php echo $item['type_service']; ?></span></td>
							</tr>
							<tr>
								<td>Weight</td>
								<td><span class="badge"><?php echo $item['weight']; ?></span></td>
							</tr>
							<tr>
								<td>Pickup Date</td>
								<td><span class="badge"><?php echo $item['collection_date_time']; ?></span></td>
							</tr>
							<tr>
								<td>Shipping Description</td>
								<td><span class="badge"><?php echo $item['shipping_description']; ?></span></td>
							</tr>
							<tr>
								<td>Sender Name</td>
								<td><span class="badge"><?php echo $item['name1']; ?></span></td>
							</tr>
							<tr>
								<td>Sender Phone</td>
								<td><span class="badge"><?php echo $item['phone1']; ?></span></td>
							</tr>
							<tr>
								<td>Sender Address</td>
								<td><span class="badge"><?php echo $item['address1']; ?></span></td>
							</tr>
							<tr>
								<td>Reciepient Name</td>
								<td><span class="badge"><?php echo $item['name2']; ?></span></td>
							</tr>
							<tr>
								<td>Reciepient Phone</td>
								<td><span class="badge"><?php echo $item['phone2']; ?></span></td>
							</tr>
							<tr>
								<td>Reciepient Address</td>
								<td><span class="badge"><?php echo $item['address2']; ?></span></td>
							</tr>
						</tbody>
					</table>                    
				</div>
			   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

<div class="container">
<section id="tables">
 <table class="table">
                     <thead>
                        <tr>
                           <th>Current Location</th>
                            <th>Tracking No</th>
                           <th>Email</th>
                           <th>Remark</th>
                           <th>Date</th>
                        </tr>
                     </thead>
 <?php foreach($result as $row) : ?>
                       <tbody>
                     <tr>
            <td><a href=""></a><?php echo $row['new_location']; ?></td>
            <td><a href=""></a><?php echo $row['track_no']; ?></td>
                       <td><?php echo $row['receiver_email']; ?></td>
                        <td><?php echo $row['remark']; ?></td>
                <td><a href=""></a><?php echo $row['date_delivery']; ?></td>
         
                     </tr>
                     </tbody>
<?php endforeach; ?>
 </table>
</section>
</div>


	<?php include("includes/footer.php"); ?>