<?php require_once 'session.php'; ?>
<?php  require_once 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php
      $id = (int) $_GET['subj'];
      
      $sql = 'SELECT * FROM public_form WHERE id = :id LIMIT 1';
            $stmt = $pdo->prepare($sql);
           $rows = $stmt->execute(array(':id' => $id));
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
		             <td>Client Name &nbsp;:<?php echo $row['name']; ?></td> 
		         </tr>
		          <tr>
		             <td>Company &nbsp;:<?php echo $row['company']; ?></td> 
		         </tr>
		           <tr>
		             <td>Address &nbsp;:<?php echo $row['address']; ?></td> 
		         </tr>
		           <tr>
		             <td>Floor &nbsp;:<?php echo $row['floor']; ?></td> 
		         </tr>
		           <tr>
		             <td>Country&nbsp;:<?php echo $row['country']; ?></td> 
		         </tr>
		           <tr>
		             <td>Post_code &nbsp;:<?php echo $row['post_code']; ?></td> 
		         </tr>
		           <tr>
		             <td>City &nbsp;:<?php echo $row['city']; ?></td> 
		         </tr>
		          <tr>
		             <td>Phone &nbsp;:<?php echo $row['phone']; ?></td> 
		         </tr>
		          <tr>
		             <td>Email &nbsp;:<?php echo $row['email']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rname&nbsp;:<?php echo $row['Rname']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rcompany &nbsp;:<?php echo $row['Rcompany']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rcountry &nbsp;:<?php echo $row['Rcountry']; ?></td> 
		         </tr>
		          <tr>
		             <td>Raddress &nbsp;:<?php echo $row['Raddress']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rfloor &nbsp;:<?php echo $row['Rfloor']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rpost_code &nbsp;:<?php echo $row['Rpost_code']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rcity &nbsp;:<?php echo $row['Rcity']; ?></td> 
		         </tr>
		          <tr>
		             <td>Rphone &nbsp;:<?php echo $row['Rphone']; ?></td> 
		         </tr>
		          <tr>
		             <td>Remail &nbsp;:<?php echo $row['Remail']; ?></td> 
		         </tr>
		         
    </tbody>

  </table>
               <hr class="bs-docs-separator">
</section>
  <a href="public_registered_page.php"
	 style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
		 Go Back
	</a>
<div class="clearfix"> </div>
</div>

<?php include("includes/footer.php"); ?>

