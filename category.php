<?php
get_header(); ?>

	<div id="container" class="content-area">
		<?php get_sidebar('left');?>
        <div id="content" class="site-content col-md-8" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
            <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php// echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<ul class="media-list">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part('content');?>	
			
			<?php endwhile; ?>
			</ul>
			
			<ul class="pager">
				<li class="previous"><?php echo get_next_posts_link( 'Older Posts'); ?></li>
				<li class="next"><?php echo get_previous_posts_link( 'Newer Posts' ); ?></li>
			</ul>	
         <?php else:?>
         <?php  get_template_part('content','none');?>
		<?php endif; ?>

		</div><!-- #content -->
        <?php get_sidebar('right'); ?>
	</div><!-- #container -->


<?php get_footer(); ?>
