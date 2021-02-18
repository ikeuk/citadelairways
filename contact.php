<?php  require_once 'model.php'; ?>
<?php

		 		$result = " ";
            if(isset($_POST['submit'])){
				require 'phpmailer/PHPMailerAutoload.php';
			  
			  $mail = new PHPMailer;
			 $mail->IsSMTP();
			 $mail->Host = 'smtp.gmail.com'; // or $mail->Host='smtpout.secureserver.net';
			  $mail->Port =  587; // or $mail->Port = '80';
			  $mail->SMTPAuth = true;
			  $mail->SMTPSecure= 'tls'; // optional
			  $mail->Username = "powerexpresscourierservice@gmail.com";//define smtp username
			  $mail->Password = "biocertified1";//define smtp password//username is my full emaill address
			  $mail->setFrom($_POST['email'],$_POST['name']); // we define sender Email
			  $mail->AddAddress("powerexpresscourierservice@gmail.com");//The email ID from which i want to recieve the contact form
			 $mail->addReplyTo($_POST['email'],$_POST['name']);
			  $mail->isHTML(true);
			  $mail->Subject = 'From Submition: '. $_POST['subject'];
			  $mail->Body='<p> Name: '. $_POST['name']. ' <br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].
			  '<br>Number: '.$_POST['number']. '</p>';
 					
            if (!$mail->Send()) {
			  $result = "Something went wrong. Please try again";
            } else {
               $result = "Thanks you " . $_POST['name'] . "for contacting us we'll get back to you soon!";
            }
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
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		
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
				<h3 class="text-capitalize mb-2">send us a message</h3>
				<form action="contact.php" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="name" placeholder="Full name" required="">
						<input type="text" name="subject" placeholder="Subject" required="">
					</div>
					<div class="input-group">
						<input type="email" class="margin2" name="email" placeholder="Your email address"  required="">
						<input type="text" name="number" placeholder="phone number"  required="">
					</div>
					<div class="input-group">
						<textarea rows="4" cols="50" name="message" placeholder="message"></textarea>
					</div>
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">contact Information</h3>
				<p class="">Maecenas ac euismod eros. Aliquam a suscipit nibh. Aliquam iaculis erat porta mauris fermentum lacinia.</p>
				<address>
					<p class="mt-3"><span class="fa fa-map-marker"></span> 1380H 4th cross, Kmome St, NY 10002,<span> Canada.</span> </p>
					<p class="my-2"><span class="fa fa-phone"></span> +14 999 888 7773 </p>
					<p class=""><span class="fa fa-envelope-open"></span> <a href="mailto:mail@example.com">mail@example.com</a> </p>
				</address>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<?php include("includes/footer.php"); ?>
