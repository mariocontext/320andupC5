<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
<!-- Row -->
<div id="general-content" class="grids grids-two content clearfix">

		<div id="left-sidebar-container" class="grid grid-1">

		<div id="left-sidebar-inner">
	
			<?php  
			$a = new Area('Sidebar');
			$a->display($c);
			$a->setBlockWrapperStart('<div class="grid-element">');
    		$a->setBlockWrapperEnd('</div>')
			?>
			
		</div><!-- /left-sidebar-inner -->
	
	</div><!-- /left-sidebar-container -->

	<div id="main-content-container" class="grid grid-2">
		<div id="main-content-inner">

			<h1><?php  echo $c->getCollectionName(); ?></h1>
		
			<?php  
			$a = new Area('Main');
			$a->display($c);
			$a->setBlockWrapperStart('<div class="grid-element">');
    		$a->setBlockWrapperEnd('</div>')
			?>
			
		</div><!-- /main-content-inner -->
	
	</div><!-- /main-content-container -->


</div><!-- /general-content -->
<!-- /Row -->
	
<?php  $this->inc('elements/footer.php'); ?>
