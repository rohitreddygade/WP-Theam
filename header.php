<!DOCTYPE html>
<html>
<head>
	<?php wp_head();?>

</head>
<body <?php body_class();?> >
<header class="sticky-top" >
	
	<div class="nav" >
		<?php wp_nav_menu(
		array(
			 'theme_location' => 'top-menu',
			 'container_class' => 'nav-a',
             'menu_class' => 'nav-small'
		));?>
	</div>
sy
</header>
