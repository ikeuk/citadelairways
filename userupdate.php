<?php require_once 'session.php'; ?>
<?php  require_once 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])) {
            $id = $post['id'];
            $name = $post['name'];
            $email = $post['email'];
            $sql = ("UPDATE users SET name=:name, email=:email WHERE id = :id");
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute(array(':id'=> $id, ':name'=>$name, ':email'=>$email));
            if($result){
              $message = "Client Successfully Updated.";
            } else {
                $message = "You had an error";
            }
           
        }
?>
<?php 
        if(isset($_GET['search'])) {
            $id = $_GET['search'];
            $sql = 'SELECT * FROM users WHERE id = :id';
            $stmt = $pdo->prepare($sql);
          $stmt->execute(array(':id' => $id)); 
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
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
				<h3 class="text-capitalize mb-2">Update User &nbsp;<?php echo $row['name']; ?></h3>
				<form action="userupdate.php?search=<?php echo $row['id']; ?>" method="post">
					<div class="input-group">
              <input type="hidden" class="margin2" name="id" value="<?php echo $row['id']; ?>">
						<input type="text" class="margin2" name="name" value="<?php echo $row['name']; ?>" required="">
						<input type="text" name="email" value="<?php echo $row['email']; ?>" required="">
					</div>
					
					<div class="input-group1">
						<button class="submit btn" name="submit">Update</button>
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
