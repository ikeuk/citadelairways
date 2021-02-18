<?php require_once 'session.php'; ?>
<?php  require 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php
     
      $errors = array();

       $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
        if(isset($post['submit'])){
         
         $name = $post['name'];
         $email = $post['email'];
         //$track_no = $post['track_no'];
          $track_no = md5(rand());


         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email']  = "Email adress is invalid";
         }

         $emailQuery = "SELECT * FROM users WHERE email = :email OR track_no = :track_no LIMIT 1";
         $stmt = $pdo->prepare($emailQuery);
          $result = $stmt->execute(array(':email' => $email, ':track_no' => $track_no));
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $userCount = $stmt->rowCount();

          if ($userCount > 0) {
           $errors['email']  = "Email/track_no Already Exists please change another one";
            $errors['track_no']  = "Track_no Already Exists";
            $message = "Email/track_no Already Exists";
          }

          if (count($errors) === 0) {
            //inser into mysql
            $sql = 'INSERT INTO users (name, email, track_no) VALUES(:name, :email, :track_no)';
             $stmt = $pdo->prepare($sql);

           $stmt->execute(array(':name' => $name, ':email' => $email, ':track_no' => $track_no));
            //verify
            if($stmt){
               $message = "Client Succefully Registered.";
            }else{
              $message = "An error occured.";  
            }
        }
}
?>
<?php include("includes/header.php"); ?>

<div class="inner-banner" id="home">
	<div class="container">
		 
	</div>	
</div>
<br />
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
<section class="contact py-5 my-lg-5">
	<br /><br /><br /><br /><br /><br /><br /><br />
	<div class="map">
		<div class="main_grid_contact">
			<div class="form">
				<h3 class="text-capitalize mb-2">New Client</h3>
				<form action="addNewClient.php" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="name" placeholder="Full name" required="">
						<input type="text" name="email" placeholder="Client Email" required="">
					</div>
					
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>

				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">Client Information</h3>
				<div class="container">
		 <div class="page-header">
             <h3 class="bars"><a href="mypage.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						 Go Back
						</a>
				 <div class="clearfix"> </div></h3>
    </div>
</div>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>
