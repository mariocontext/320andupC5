<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
			
			<div id="320-breadcrumbs">
                <?php 
                $bt = BlockType::getByHandle('autonav');
                $bt->controller->displayPages = 'top';
                $bt->controller->orderBy = 'display_asc';                    
                $bt->controller->displaySubPages = 'relevant_breadcrumb';
				$bt->controller->displaySubPageLevels = 'all';
                $bt->render('templates/breadcrumb');
                ?>
            </div><!-- /breadcrumbs -->