<?php require_once 'session.php'; ?>
<?php  require 'model.php'; ?>
<?php comfirm_is_log_in(); ?>
<?php

      $sql = 'SELECT * FROM public_form ORDER BY id DESC';
            $stmt = $pdo->prepare($sql);
           $rows = $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("includes/header.php"); ?>

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->
<br />
<div class="container">
<section id="tables">
      <div class="bs-docs-example">
  <table class="table">
        <nav class="pt-2">
			<div id="logo">
				<h4> <a href="#"></span> Client That Registered Through the form. </a></h4>
			</div>
		</nav>
  </div>
   <?php foreach($rows as $row) : ?>
    <tbody>
		          <tr>
		             <td>Client Name &nbsp;:<a href="public_single.php?subj=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td> 
		         </tr>
		         
    </tbody>
    <?php endforeach; ?>
  </table>
               <hr class="bs-docs-separator">
</section>
  <a href="mypage.php"
	 style="color:#fff;text-decoration:none;font-weight:600;display:inline-block;padding:10px 30px;font-size: 16px;border-radius:25px;background:#d4781c;border:2px solid#d4781c;text-transform:capitalize;">
		 Go Back
	</a>
<div class="clearfix"> </div>
</div>