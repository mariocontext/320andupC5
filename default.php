<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<!-- Row -->
<div id="general-content" class="grids grids-two content clearfix">

	<div id="main-content-container" class="grid grid-1">
		<div id="main-content-inner">
		
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
			
		</div><!-- /main-content-inner -->
	
	</div><!-- /main-content-container -->

	<div id="right-sidebar-container" class="grid grid-2">

		<div id="right-sidebar-inner">
	
			<?php  
			$a = new Area('Sidebar');
			$a->display($c);
			?>
			
		</div><!-- /right-sidebar-inner -->
	
	</div><!-- /right-sidebar-container -->
	

</div><!-- /general-content -->
<!-- /Row -->
	
<?php  $this->inc('elements/footer.php'); ?>
