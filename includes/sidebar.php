<?php 
	global $sidebar_width;
	if(isset($sidebar_width)) {
		$width = 'span'.$sidebar_width;
	} else {
		$width = 'span3'; 
	}
 ?>
<div class="row">
	<div id="sidebar-hrlinks" class="<?php echo $width; ?>">
		<h3>Resources</h3>
		<?=wp_nav_menu(array(
			'menu'           => 'Resources and Links', 
			'container'      => 'false', 
			'menu_class'     => 'unstyled', 
			'menu_id'        => '', 
			'walker'         => new Bootstrap_Walker_Nav_Menu()
			));
		?>
	</div>
</div>
<?php if(!is_front_page()) { ?>
<div class="row">
	<div id="sidebar-academiclinks" class="<?php echo $width; ?>">
		<h3>Need Help Finding</h3>
		<?=wp_nav_menu(array(
			'menu'           => 'Need Help Finding', 
			'container'      => 'false', 
			'menu_class'     => 'unstyled', 
			'menu_id'        => '', 
			'walker'         => new Bootstrap_Walker_Nav_Menu()
			));
		?>
	</div>
</div>
<?php } ?>