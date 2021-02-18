<?php require_once 'session.php'; ?>
<?php  require 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<br />
<div class="container">
<section id="tables">
     <div class="page-header">
             <h3 class="bars"><a href="addNewClient.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						 Add New Client
						</a>
				 <div class="clearfix"> </div></h3>
    </div>
    <br /><br />
      <div class="bs-docs-example">
 <?php echo fetch_client_data(); ?>
  </div>
               <hr class="bs-docs-separator">
</section>
</div>
<div class="container">
  <h3 class="bars"><a href="public_registered_page.php"
						   style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
						 Public Registered
						</a>
				 <div class="clearfix"> </div></h3>
				</div>
<?php include("includes/footer.php"); ?>

