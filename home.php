<?php 
/*
* THE HOME PAGE
*
*/
?>
<?php get_header(); ?>

 <!--le container général du site web-->

<div id="container" class="content-area">
	<?php get_sidebar('left');?>
    <!--chargement de la page à l'aide du javascript-->  
    <div id="home-content" role="main">
	</div>
	
    <div id="content" class="site-content col-md-8" role="main">
	<?php //get_template_part('content','carousel');?>
	<?php if(have_posts()):?>
    	<ul class="media-list ">
		<?php while(have_posts()): the_post(); get_template_part('content',get_post_format());endwhile;?> 
		</ul>
		
		
		<ul class="pager">
			<li class="previous"><?php echo get_next_posts_link( 'Older Posts'); ?></li>
			<li class="next"><?php echo get_previous_posts_link( 'Newer Posts' ); ?></li>
		</ul>	
<?php 
// clean up after our query
wp_reset_postdata(); 
?>
	<?php else: get_template_part('content','none');endif;?>
    </div><!--#content .site-content-->
    <?php //get_sidebar('right');?>
</div><!--#container .content-area-->
<?php get_footer();?>
