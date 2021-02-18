
<?php session_start(); ?>
<?php  require_once 'model.php'; ?>
<?php
      $errors = array();
      
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
     // $password = sha1($post['password']);

            if(isset($post['submit'])) {  

            $email = $post['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errors['email'] = "Email address is invalid";
            }

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        $stmt = $pdo->prepare($sql);
      $stmt->execute(array(':email' => $email, ':password' => $password)); 
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row){
           $_SESSION['is_log_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name_n'],
                    "email" => $row['email']
                );
                header('location:mypage.php'); 
       }else{
              header('location:login.php?ml=1'); 
       }
     }
            
?>
<?php include("includes/header.php"); ?>
<div class="inner-banner" id="home">
	<div class="container">
	</div>	
</div>
<section class="contact py-5 my-lg-5">
	<br /><br /><br /><br /><br /><br /><br /><br />
	<div class="map">
		<div class="main_grid_contact">
			<div class="form">
				<h3 class="text-capitalize mb-2">Login</h3>
				<form action="login.php" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="email" placeholder="Email" required="">
						<input type="text" name="password" placeholder="Password" required="">
					</div>
					
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">contact Information</h3>
				<p class="">Maecenas ac euismod eros. Aliquam a suscipit nibh. Aliquam iaculis erat porta mauris fermentum lacinia.</p>
				
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>