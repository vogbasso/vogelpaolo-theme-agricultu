<?php get_header();?>
<div id="container" class="content-area row-fluid">
<?php get_sidebar('left');?>
<div id="content" class="site-content col-md-8" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php //comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>
             
</div>
<?php get_sidebar('right');?>
</div>
<?php get_footer();?>