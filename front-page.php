<?php get_header();?>
<div class="container">
	<center>this is front page</center>

		<?php if(have_posts()) : while(have_posts()): the_post();?>
				<?php the_content();?>

		<?php endwhile; endif?>


</div>	

<?php get_footer();?>