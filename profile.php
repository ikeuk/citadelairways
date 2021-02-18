<?php require_once 'session.php'; ?>
<?php  require_once 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php
      $id = (int) $_GET['p'];
      
      $sql = 'SELECT * FROM backing WHERE user_id = :user_id LIMIT 1';
            $stmt = $pdo->prepare($sql);
           $rows = $stmt->execute(array(':user_id' => $id));
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("includes/header.php"); ?>
<?php foreach($rows as $row) : ?>
              
              <?php endforeach; ?>
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<br />
<div class="container">
<section id="tables">
     
      <div class="bs-docs-example">
  <table class="table">
        <nav class="pt-2">
			<div id="logo">
				<h4> <a href="#"></span> Details Of Client Shippment. </a></h4>
			</div>
		</nav>
  </div>
    <tbody>
                 <tr>
		             <td>Tracking No &nbsp;:<?php echo $row['tracking_no']; ?></td> 
		         </tr>
		          <tr>
		             <td>Schedule To Delivery On &nbsp;:<?php echo $row['delivery_schedule']; ?></td> 
		         </tr>
		           <tr>
		             <td>Originating Company &nbsp;:<?php echo $row['origin']; ?></td> 
		         </tr>
		           <tr>
		             <td>Final Destination &nbsp;:<?php echo $row['last_location']; ?></td> 
		         </tr>
		           <tr>
		             <td>Destination &nbsp;:<?php echo $row['destination']; ?></td> 
		         </tr>
		           <tr>
		             <td>Service Mode &nbsp;:<?php echo $row['service_mode']; ?></td> 
		         </tr>
		           <tr>
		             <td>Type Service &nbsp;:<?php echo $row['type_service']; ?></td> 
		         </tr>
		          <tr>
		             <td>Weight &nbsp;:<?php echo $row['weight']; ?></td> 
		         </tr>
		          <tr>
		             <td>Pickup Date &nbsp;:<?php echo $row['collection_date_time']; ?></td> 
		         </tr>
		          <tr>
		             <td>Shipping Description &nbsp;:<?php echo $row['shipping_description']; ?></td> 
		         </tr>
		          <tr>
		             <td>Sender Name &nbsp;:<?php echo $row['name1']; ?></td> 
		         </tr>
		          <tr>
		             <td>Sender Phone &nbsp;:<?php echo $row['phone1']; ?></td> 
		         </tr>
		          <tr>
		             <td>Sender Address &nbsp;:<?php echo $row['address1']; ?></td> 
		         </tr>
		          <tr>
		             <td>Reciepient Name &nbsp;:<?php echo $row['name2']; ?></td> 
		         </tr>
		          <tr>
		             <td>Reciepient Phone &nbsp;:<?php echo $row['phone2']; ?></td> 
		         </tr>
		          <tr>
		             <td>Reciepient Address &nbsp;:<?php echo $row['address2']; ?></td> 
		         </tr>
		         
    </tbody>

  </table>
               <hr class="bs-docs-separator">
</section>
  <a href="updateprofile.php?id=<?php echo $row['id']; ?>"
	 style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
		 UPDATE?
	</a>
<div class="clearfix"> </div>
</div>

<?php include("includes/footer.php"); ?>

