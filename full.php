<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
<div id="general-content" class="content clearfix">

	<div id="main-content-container">
		<div id="main-content-inner">
		
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
			
		</div><!-- /main-content-inner -->
	
	</div><!-- /main-content-container -->

</div><!-- /general-content -->
	
<?php  $this->inc('elements/footer.php'); ?>
