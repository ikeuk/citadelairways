<?php  require_once 'model.php'; ?>
<?php 
      $errors = array();
      $message = "";
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = sha1($post['password']);

        if(isset($post['submit'])){
        $name_n = $post['name']; 
        $email = $post['email'];

        $emailQuery = "SELECT * FROM user WHERE email = :email OR name_n = :name_n LIMIT 1";
         $stmt = $pdo->prepare($emailQuery);
          $result = $stmt->execute(array(':email' => $email, ':name_n' => $name_n));
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          $userCount = $stmt->rowCount();

          if ($userCount > 0) {
            $errors['email']  = "Email/track_no Already Exists please change another one";
            $message = "Email/Already Exists can not register.";
          }
         
         if (count($errors) === 0) {

    $sql = 'INSERT INTO user(name_n, email, password)VALUES(:name_n,:email,:password)';
    $stmt = $pdo->prepare($sql);
       $stmt->execute(array(':name_n' => $name_n, ':email' => $email, ':password' => $password));

       if ($stmt) {
        $message = "You can now go and login with email and password";
       } else{
        $message = 'not successful';
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

<section class="contact py-5 my-lg-5">
	<br /><br /><br /><br /><br /><br /><br /><br />
		
	<div class="map">
		<div class="main_grid_contact">

			<div class="form">
				<h3 class="text-capitalize mb-2">Master Page</h3>
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
				<form action="masterpage.php" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="name" placeholder="Enter Your Name" required="">
						<input type="text" name="email" placeholder="Enter Your Email" required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="password" placeholder="Enter Your Password" required="">
					</div>
					<div class="input-group1">
						<button class="submit btn" name="submit">Create </button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">Detail Of Master Page</h3>
				<p class="">Master Page.</p>
				
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>