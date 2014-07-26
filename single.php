<?php get_header(); ?>
	
	
	<div id="container" class="content-area">
    	<?php get_sidebar('left');?>
		<div id="content" class="site-content col-md-8" role="main">

			<?php /* The loop */ if(have_posts()):?>
			<?php while ( have_posts() ) : the_post(); ?>
  				<?php get_template_part( 'content'); ?>
				<?php vogelpaolobasso_post_nav(); ?>
			<?php endwhile;
			endif;
			 ?>

		</div><!-- #content .site-content -->
        <?php get_sidebar('right'); ?>
	</div><!-- #container .content-area -->

<?php get_footer(); ?>
