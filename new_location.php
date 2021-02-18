<?php require_once 'session.php'; ?>
<?php  require_once 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<script type="text/javascript">
	function addNewLine()
	{
		text = document.getElementById('userField').value;
		text = text.replace(/ /g, "[sp][sp]");
		text = text.replace(/\n/g, "[nl]");
		document.getElementById('msg').value = text;
		return false;
	}

</script>
<?php

		   $base_url = 'http://localhost/php.dev/Trackapp/new_location.php/';
     
            if(isset($_POST['submit'])){
				// require 'phpmailer/PHPMailerAutoload.php';
			  
			 //  $mail = new PHPMailer;
			 // $mail->IsSMTP();
			 // $mail->Host = 'smtp.gmail.com'; // or $mail->Host='smtpout.secureserver.net';
			 //  $mail->Port =  587; // or $mail->Port = '80';
			 //  $mail->SMTPAuth = true;
			 //  $mail->SMTPSecure= 'tls'; // optional
			 //  $mail->Username = "powerexpresscourierservice@gmail.com";//define smtp username
			 // $mail->Password = "biocertified1";//define smtp password//username is my full emaill address
			 //  $mail->From = 'powerexpresscourierservice@gmail.com'; // we define sender Email
			 //  $mail->FromName = "powerexpresscourierservice@gmail.com";//Here define email send from and it will be seen by the reciever
			 //  $mail->AddAddress($_POST["receiver_email"]);//Here we specify receiver email
			 // $mail->WordWrap= 50;
			 //  $mail->isHTML(true);
			 //  $mail->Subject = $_POST['new_location'];

              $id = $_POST['casa'];
 
               $track_no = $_POST['track_no'];
                $new_location = $_POST['new_location'];
				$state_shipping = $_POST['state_shipping'];
				$receiver_email = $_POST['receiver_email'];
				$date_delivery = $_POST['date_delivery'];
				$message_body = $_POST['remark'];
				$message_body = preg_replace("#\[sp\]#", "&nbsp;", $message_body);
			// $message_body = preg_replace("#\[nl\]#", "<br>\n", $message_body);
			//  $message_body .= '<img src="'. $base_url .'location_track.php?code=' .$track_no.'" width = "1" height= "1" />';
			//  	if($mail->Send()){
            $sql = 'INSERT INTO locations (user_id1,track_no,new_location,state_shipping,receiver_email,date_delivery,remark) VALUES
             (:user_id1, :track_no, :new_location, :state_shipping, :receiver_email, :date_delivery, :remark)';

            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':track_no' => $track_no, ':new_location' => $new_location, ':state_shipping' => $state_shipping, ':receiver_email'=> $receiver_email, ':remark' => $message_body, ':date_delivery' => $date_delivery, ':user_id1' => $id));
            if ($stmt) {
			   header("location: mypage.php");
			   // exit;
            }else{
               $message = "You have an error";
            }
		//}      
 }

?>
<?php include("includes/functions.php");?>
<?php if(isset($_GET['locate'])) {
		$locate = $_GET['locate'];
		$sql = 'SELECT * FROM users WHERE id = :id LIMIT 1';
		$stmt = $pdo->prepare($sql);
		$rows = $stmt->execute(array(':id' => $locate));
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
	<br /><br /><br /><br />
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<div class="map">
		<?php foreach($result as $row) : ?> 

<?php endforeach; ?> 
		<div class="main_grid_contact">

			<div class="form">
				<h3 class="text-capitalize mb-2">Update Current Location</h3>
				<form method="post" action="new_location.php?locate=<?php echo $row['id']; ?>" onsubmit="addNewLine()">
					<div class="input-group">
							<input type="hidden" class="margin2" name="casa" value="<?php echo $row['id']; ?>" required="">
							<input type="hidden" name="track_no" value="<?php echo $row['track_no']; ?>" required="">
						<input type="text" class="margin2" name="new_location" placeholder="Enter New Location" required="">
						<input type="text" name="state_shipping" placeholder="Enter State Shipping" required="">
					</div>
					<div class="input-group">
						<input type="email" class="margin2" name="receiver_email" placeholder="Enter Receiver Email"  required="">
						<input type="date" name="date_delivery" placeholder="Date of Delivery"  required="">
					</div>
					<div class="input-group">
						<textarea name="remark" id="msg" style="display: none;" rows="4" cols="50" placeholder="message"></textarea>
					</div>
					<div class="input-group">
						<textarea id="userField" rows="4" cols="50" placeholder="message"></textarea>
					</div>
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">contact Information</h3>
				 <a href="mypage.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						  Go Back
						</a>
						   <div class="clearfix"> </div>
			</div>
	</div>
	
</section>
<!-- //footer-top -->
<div class="container">
				<div class="travel">
						<?php echo fetch_client_case(); ?> 
				</div>  
		</div>
